<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;

class testimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        // return datatable of the makes available
        $data = Testimonial::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y-m-d H:i:s'); 
                })
                
                ->addColumn('action', function($row){

                    $btn = '<a href="javascript:void(0)" onclick="editTestimonial(`'.$row->id.'`)" class="edit btn btn-success btn-sm">Edit</a> 
                            <a href="javascript:void(0)" onclick="delTestimonial(`'.$row->id.'`)" class="delete btn btn-danger btn-sm">Delete</a>';
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
        return view('Admin.testimonials');
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
            'mobile' => 'required',
            'description' => 'required',
            'image.*' => 'required|file',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $data = Testimonial::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'occupation' => $request->occupation,
                'user_id' => Auth::user()->id,
                'description' => $request->description,
                'image' => Storage::putFile('public/testimonials', $image),
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
        $data = Testimonial::where('id', $id)->first();
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
        $testimonial_id = $request->testimonial_id;
        $data = Testimonial::where('id', $testimonial_id)->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'occupation' => $request->occupation,
            'user_id' => Auth::user()->id,
            'description' => $request->description,
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
        $fetch_data = Testimonial::where('id', $id)->first();
        $data = Testimonial::where('id', $id)->delete();
        if ($data) {
            Storage::delete($fetch_data->image);
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
