<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function newuser()
    {
        return view('newuser');
    }

    public function adduser()
    {
        $valid = request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'father_name'=>'required',
            'national_code'=>'required',
            'national_number'=>'required',
            'date'=>'required',
            'phone_number'=>'required',
            'mobile_number'=>'required',
            'gender'=>'required',
            'education'=>'required',
            'password'=>'required',
            'image'=>'required',
            'State'=>'required',
            'city'=>'required',
            'post_number'=>'required',
            'Address'=>'required',


        ]);

        $insert = new User();
        $insert->first_name = request('first_name');
        $insert->last_name = request('last_name');
        $insert->father_name = request('father_name');
        $insert->national_code = request('national_code');
        $insert->national_number = request('national_number');
        $insert->date = request('date');
        $insert->phone_number = request('phone_number');
        $insert->mobile_number = request('mobile_number');
        $insert->gender = request('gender');
        $insert->education = request('education');
        $insert->password = request('password');
        $insert->image = request('image');
        $insert->State = request('State');
        $insert->city = request('State');
        $insert->post_number = request('post_number');
        $insert->Address = request('Address');
        $insert->save();

        return redirect()->route('userslist');

    }


    public function showeditpage($id)
    {
        $user = User::find($id);
        return view('edituser' , ['user'=>$user]);

    }

    public function edit($id)
    {
        $user = User::find($id);
        $user->update([
            $user->first_name = request('first_name'),
            $user->last_name = request('last_name'),
            $user->father_name = request('father_name'),
            $user->national_code = request('national_code'),
            $user->national_number = request('national_number'),
            $user->date = request('date'),
            $user->phone_number = request('phone_number'),
            $user->mobile_number = request('mobile_number'),
            $user->gender = request('gender'),
            $user->education = request('education'),
            $user->password = request('password'),
            $user->image = request('image'),
            $user->State = request('State'),
            $user->city = request('State'),
            $user->post_number = request('post_number'),
            $user->Address = request('Address'),
            $user->save(),
        ]);

        return view('userslist');

    }

    public function userslist()
    {
        return view('userslist' , ['users'=>Customer::all()]);
    }


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
