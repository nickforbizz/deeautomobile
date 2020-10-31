<?php

namespace App\Http\Controllers;

use App\Models\VehicleMake;
use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

class makesController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        // return datatable of the makes available
        $data = VehicleMake::where('status', 1)->get();
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
        return view('Admin.product_cats');
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

        if($request->hasFile('make_img')){
            $image = $request->file('make_img');
            $make_data = VehicleMake::create([
                'name' => $title,
                'user_id' => Auth::user()->id,
                'description' => $description,
                'image' => Storage::putFile('public/makes', $image),
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
            
            
        }else{
            return [
                'code' => -1,
                'msg' => 'Image not provided'
            ];
        };

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
        $veh = VehicleMake::where('id', $id)->first();
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
        $make_data = VehicleMake::where('id', $make_id)->update([
            'name' => $make_name,
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
        $fetch_make_data = VehicleMake::where('id', $id)->first();
        $make_data = VehicleMake::where('id', $id)->delete();
        if ($make_data) {
            Storage::delete($fetch_make_data->image);
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
