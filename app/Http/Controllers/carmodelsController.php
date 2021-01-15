<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use App\Models\VehicleMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

class carmodelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = CarModel::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y-m-d H:i:s'); 
                })
                ->addColumn('make', function ($row){
                    $make = VehicleMake::where('id', $row->make_id)->first();
                    return $make->name; 
                })                
                ->addColumn('action', function($row){

                    $btn = '<button type="button" 
                                    data-toggle="tooltip" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    onclick="editCarMake(`'.$row->id.'`)"
                                    data-original-title="Edit Car">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="delCarMake(`'.$row->id.'`)"
                                    data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>';

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
        $makes = VehicleMake::where('status', 1)->get(['name', 'id']);
        return view('Admin.pages.models', compact('makes'));
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
        $title = $request->title;
        $description = $request->description;

        // if($request->hasFile('make_img')){
        //     $image = $request->file('make_img');
            $make_data = CarModel::create([
                'name' => $title,
                'user_id' => Auth::user()->id,
                'make_id' => $request->make_id,
                'description' => $description,
                // 'image' => Storage::putFile('public/makes', $image),
            ]);

            // record was inserted
            if ($make_data) {
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
            
            
        // }else{
        //     return [
        //         'code' => -1,
        //         'msg' => 'Image not provided'
        //     ];
        // };

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\makes  $makes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // vars from request
        $id = $request->id;
        $veh = CarModel::where('id', $id)->first();
        return $veh;
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\makes  $makes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //vars from request
        $make_id = $request->make_id;
        $make_name = $request->title;
        $make_data = CarModel::where('id', $request->model_id)->update([
            'name' => $make_name,
            'make_id' => $make_id,
            'user_id' => Auth::user()->id,
            'description' => $request->description,
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
     * @param  \App\makes  $makes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $model_data = CarModel::where('id', $id)->delete();
        if ($model_data) {
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
