<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
//    public function newuser()
//    {
////        return view('newuser');
//        return response()->json();
//    }
//
//    public function adduser(Request $request)
//    {
//        $valid = request()->validate([
//            'first_name'=>'required',
//            'last_name'=>'required',
//            'father_name'=>'required',
//            'national_code'=>'required',
//            'national_number'=>'required',
//            'date'=>'required',
//            'phone_number'=>'required',
//            'mobile_number'=>'required',
//            'gender'=>'required',
//            'education'=>'required',
//            'password'=>'required',
//            'image'=>'required',
//            'State'=>'required',
//            'city'=>'required',
//            'post_number'=>'required',
//            'Address'=>'required',
//        ]);
//
//        $insert = Customer::create($request->toArray());
//
//
////        return redirect()->route('userslist');
//        return response()->json($insert);
//
//    }


//    public function showeditpage($id)
//    {
//        $user = Customer::find($id);
////        return view('edituser' , ['user'=>$user]);
//        return response()->json([
//            'data' => $user
//        ]);
//
//
//    }

//    public function edit(Request $request, $id)
//    {
//        $user = Customer::find($id);
//        $user->update($request->toArray());
//
//        return response()->json([
//            'data' => $user
//        ]);
//
//    }

//    public function userslist()
//    {
////        return view('userslist' , ['users'=>Customer::all()]);
////
////        $user = Customer::all();
////        return json_encode($user);
//        $user = Customer::all();
//        return response()->json([
//            'data' => $user
//        ]);
//    }


    public function panel()
    {
        $users = Customer::count();
            $lastusers = Customer::select('id','first_name', 'last_name', 'mobile_number', 'created_at')
                ->orderBy('created_at', 'DESC')->skip(0)->take(4)->get();


        return view('panel' , ['users' => $users , 'lastusers' => $lastusers]);



    }

    public function login()
    {
        return view('login');
    }}
