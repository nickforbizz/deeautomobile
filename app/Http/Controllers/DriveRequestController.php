<?php

namespace App\Http\Controllers;

use App\Models\Bookedride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

class DriveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = Bookedride::where('status', 1)->get();
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
        return view('Admin.bookedrides');
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
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'date' => 'required',
        ]);

        if ($validate->fails()) {
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }
       
        $data = Bookedride::create([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'mobile' => $request->mobile,
        ]);

        // record was inserted
        if ($data) {
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
     * @param  \App\makes  $makes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // vars from request
        $id = $request->id;
        $veh = Bookedride::where('id', $id)->first();
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
        $ride_id = $request->ride_id;
        $data = Bookedride::where('id', $ride_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'mobile' => $request->mobile,
        ]);

        if ($data) {
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
        $fetch_make_data = Bookedride::where('id', $id)->first();
        $make_data = Bookedride::where('id', $id)->delete();
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
