<?php

namespace App\Http\Controllers;

use App\models;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Models\VehicleFeature;
use App\Models\ModelsImg;
use App\Models\VehicleMake;
use App\Models\CarModel;
use App\Models\VehicleModel;

class modelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = VehicleModel::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data) 
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y-m-d H:i:s'); 
                })
                
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" onclick="editCarMake(`'.$row->id.'`)" class="edit btn btn-success btn-sm">Edit</a> 
                            <a href="javascript:void(0)" onclick="addCarFeature(`'.$row->id.'`, `'.$row->name.'`)" class="edit btn btn-info btn-sm">Features</a> 
                            <a href="javascript:void(0)" onclick="delCarMake(`'.$row->id.'`)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return [
            'code' => 1,
            'msg' => $data
        ];
    }


    public function loadModels(Request $request)
    {
        // var from request
        $offset = (int) $request->offset;
        $limit = (int) $request->limit;

        // fetch data
        $data = VehicleModel::where('status', 1)
                            ->skip($offset)
                            ->take($limit)
                            ->with('user')
                            ->with('modelsImgs')
                            ->orderBy('id', 'desc')
                            ->get();

        if (!$data) {
            return [
                'code' => -1,
                'msg' => 'Could not load data'
            ];
        }
        return [
            'code' => 1,
            'msg' => $data
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $makes = VehicleMake::where('status', 1)->get();
        $models = CarModel::where('status', 1)->get();
        $features = VehicleFeature::where('status', 1)->get();
        return view('Admin.products')->with([
            'makes' => $makes,
            'models' => $models,
            'features' => $features,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'model_cat' => 'required|exists:vehicle_makes,id',
            'model_img.*' => 'required|file',
        ]);

        if ($validate->fails()) {
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }

        // vars from request
        $model_name = $request->model_name;
        $model_cat = $request->model_cat;
        $model_description = $request->model_description;
        $model_label = $request->model_label;
        $model_label = $request->model_label;
        $model_type = $request->model_type;

        $veh = CarModel::where('id',$model_type)->first();


        try {
            if($request->hasFile('model_img')){
                $model_data = VehicleModel::create([
                    'name' => $veh->name,
                    'user_id' => Auth::guard('web')->user()->id,
                    'make_id' => $model_cat,
                    'model_id' => $model_type,
                    'label' => $model_label,
                    'speed' => $request->speed,
                    'price' => $request->model_price,
                    'manYr' => $request->model_manYr,
                    'mileage' => $request->model_mileage,
                    'condition' => $request->model_condition,
                    'bodyType' => $request->model_bodyType,
                    'colour' => $request->model_colour,
                    'fuel' => $request->model_fuel,
                    'transmission' => $request->model_transmission,
                    'duty' => $request->model_duty,
                    'interior' => $request->model_interior,
                    'cc' => $request->model_cc,
                    'description' => $model_description,
                ]);

                $fetchModel_data_id = VehicleModel::max('id');
    
                foreach ($request->file('model_img') as $doc){
                    ModelsImg::create([
                        'user_id'=>Auth::guard('web')->user()->id,
                        'veh_model_id'=>$fetchModel_data_id,
                        'name'=>$doc->getClientOriginalName(),
                        'media_link'=>Storage::putFile('public/models', $doc),
                        'type'=>$doc->getClientOriginalExtension()
                    ]);
                }
    
                // record was inserted
                if ($model_data) {
                    return [
                        'code' => 1,
                        'msg' => 'Model saved successfully'
                    ];
                } else {
                    return [
                        'code' => -1,
                        'msg' => 'Error saving the record'
                    ];
                }
                
                
            }else{
                return [
                    'code' => -1,
                    'msg' => 'Image not provided'
                ];
            };
        } catch (\Throwable $th) {
            throw $th;
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models  $models
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // vars from request
        $id = $request->id;
        $veh = VehicleModel::where('id', $id)->first();
        return $veh;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models  $models
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models  $models
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //vars from request
        $model_id = $request->model_id;
        $model_name = $request->model_name;
        $model_cat = $request->model_cat;
        $model_description = $request->model_description;
        $model_label = $request->model_label;
        $model_type = $request->model_type;

        $veh = CarModel::where('id',$model_type)->first();

        $make_data = VehicleModel::where('id', $model_id)->update([
            'name' => $veh->name,
            'speed' => $speed,
            'make_id' => $model_cat,
            'description' => $model_description,
            'label' => $model_label,
            'price' => $request->model_price,
            'manYr' => $request->model_manYr,
            'mileage' => $request->model_mileage,
            'condition' => $request->model_condition,
            'bodyType' => $request->model_bodyType,
            'colour' => $request->model_colour,
            'fuel' => $request->model_fuel,
            'transmission' => $request->model_transmission,
            'duty' => $request->model_duty,
            'interior' => $request->model_interior,
            'cc' => $request->model_cc,
        ]);

        if ($make_data) {
            return [
                'code' => 1,
                'msg' => 'Record updated successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Record did not updated '
            ];
        }
        
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models  $models
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $model_data = VehicleModel::where('id', $id)->delete();
        if ($model_data) {
            $model_imgs =  ModelsImg::where('veh_model_id', $id)->get();
            foreach ($model_imgs as $doc){
                Storage::delete($doc->media_link);
                ModelsImg::where('id', $doc->id)->delete();
            }
            return [
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Record did not delete'
            ];
        }
    }
}
