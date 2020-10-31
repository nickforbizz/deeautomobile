<?php

namespace App\Http\Controllers;

use App\Models\ModelFeature;
use App\Models\VehicleFeature;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Auth;

class carFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = VehicleFeature::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y-m-d H:i:s'); 
                })
                
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" onclick="editCarMake(`'.$row->id.'`)" class="edit btn btn-success btn-sm">Edit</a> 
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.veh_features');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // vars from request
        $veh_feature_name = $request->veh_feature_name;

        $veh_feature_data = VehicleFeature::create([
            'name' => $veh_feature_name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);

        // record was inserted
        if ($veh_feature_data) {
            return [
                'code' => 1,
                'msg' => 'Record saved successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Error saving the record'
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // vars from request
        $id = $request->id;
        $veh_feature = VehicleFeature::where('id', $id)->first();
        return $veh_feature;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //vars from request
        $veh_feature_id = $request->veh_feature_id;
        $veh_feature_name = $request->veh_feature_name;
        $veh_feature_data = VehicleFeature::where('id', $veh_feature_id)->update([
            'name' => $veh_feature_name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);

        if ($veh_feature_data) {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $del_feature = VehicleFeature::where('id', $id)->delete();
        if ($del_feature) {
            return [
                'code' => 1,
                'msg' => 'Record deleted successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Record did not delete successfully'
            ];
        }
    }

    public function storeCarFeatures(Request $request)
    {
        // vars from request
        $model_id = $request->model_id;
        $select_features = $request->select_features;
        $model_name = $request->model_name;

        for ($i=0; $i < count($select_features); $i++) { 
            // get feature_name
            $feature_name = VehicleFeature::where('id', $select_features[$i])->first()->name;
            $add_feature = ModelFeature::create([
                'user_id' => Auth::user()->id,
                'model_id' => $model_id,
                'model_name' => $model_name,
                'feature_name' => $feature_name,
                'feature_id' => $select_features[$i],
            ]);
        }
        if ($add_feature) {
            return [
                'code' => 1,
                'msg' => 'Record added successfully'
            ];
        } else {
            return [
                'code' => -1,
                'msg' => 'Record did not add successfully'
            ];
        }
    }
}
