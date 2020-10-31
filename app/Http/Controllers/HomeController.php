<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.index');
    }



    // create user
    public function createUser(Request $request)
    {
        
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
            return  [
                'code'=> -2,
                'msg'=>$validate->errors()
            ];
        }

        $check_mail = User::where('email', $request->email)->get();
        if (count($check_mail)) {
            $msg="Email exists";
            return back()->withErrors($msg);
        }
        // return($request);
        $image = $request->file('profile');
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_photo_path' => Storage::putFile('public/profiles', $image),
        ]);

        if (!$user) {
            $msg="user not added";
            return back()->withErrors($msg);
        }

        return back();
    }


    public function listUsers(Request $request)
    {
        // return datatable of the makes available
        $data = User::where('status', 1)->get();
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


    
    // user data
    public function profile()
    {
        return view('Admin.profile');
    }

    // user data
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    // user data
    public function register()
    {
        return view('Admin.register');
    }
}
