<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;
use DateTime;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Image;


class UserController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return datatable of the makes available
        $data = User::where('status', 1)->get();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('created_at', function ($row){
                    return date_format($row->created_at, 'Y/m/d H:i'); 
                })
                
                ->addColumn('action', function($row){
                    $btn = '<button type="button" 
                                    data-toggle="tooltip" 
                                    class="btn btn-link btn-primary btn-lg" 
                                    onclick="edituser(`'.$row->id.'`)"
                                    data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" 
                                    data-toggle="tooltip" 
                                    title="" 
                                    class="btn btn-link btn-danger" 
                                    onclick="deluser(`'.$row->id.'`)"
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
        return view('Admin.pages.users');
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
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);


        // return $validate->errors();

        if ($validate->fails()) {
            // return back()->withErrors($validate->errors());
            return  [
                'code'=> -2,
                'msg'=>json_encode($validate->errors())
            ];
        }

        $check_mail = User::where('email', $request->email)->get();
        if (count($check_mail)) {
            $msg="Email exists";
            return  [
                'code'=> -1,
                'msg'=>$msg
            ];
        }
        // vars from request
        $name = $request->name;

        if($request->hasFile('profile_photo')){
            $image = $request->file('profile_photo');
            $make_data = User::create([
                'name' => $name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'profile_photo_path' => Storage::putFile('public/profiles', $image),
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
        $veh = User::where('id', $id)->first();
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
        $user_id = $request->user_id;
        $make_name = $request->title;
        $make_data = User::where('id', $user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
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
        $fetch_make_data = User::where('id', $id)->first();
        $make_data = User::where('id', $id)->delete();
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
