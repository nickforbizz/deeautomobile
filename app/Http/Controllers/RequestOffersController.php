<?php

namespace App\Http\Controllers;

use App\Models\OfferRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;

class RequestOffersController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = OfferRequest::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y-m-d H:i:s'); 
                })
                
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" onclick="editOfferrequest(`'.$row->id.'`)" class="edit btn btn-success btn-sm">Edit</a> 
                            <a href="javascript:void(0)" onclick="delOfferrequest(`'.$row->id.'`)" class="delete btn btn-danger btn-sm">Delete</a>';
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
        return view('Admin.offers');
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
         // vars from request
         $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);

        if ($validate->fails()) {
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }

        
        $data = OfferRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'mobile' => $request->mobile,
            'price' => (float) str_replace(',', '', $request->price),
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
        $data = OfferRequest::where('id', $id)->first();
        return $data;
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
        $offer_id = $request->offer_id;
        $data = OfferRequest::where('id', $offer_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'mobile' => $request->mobile,
            'price' => (float) str_replace(',', '', $request->price),
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
        $fetch_data = OfferRequest::where('id', $id)->first();
        $data = OfferRequest::where('id', $id)->delete();
        if ($data) {
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
