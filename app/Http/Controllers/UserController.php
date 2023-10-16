<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => 'the provided credential incorrect.'
            ]);
        }

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);

    }

    public function logout(Request $request)
    {
//        auth()->logout();
//        return redirect()->route('loginPanel');
          $request->user()->tokens()->delete();
          return response()->json('Logout Successfully');


    }

    public function userslist()
    {
//        return view('userslist' , ['users'=>User::all()]);
//
//        $user = User::all();
//        return json_encode($user);
        $user = User::all();
        return response()->json([
            'data' => $user
        ]);
    }

    public function showeditpage($id)
    {
        $user = User::find($id);
//        return view('edituser' , ['user'=>$user]);
        return response()->json([
            'data' => $user
        ]);


    }

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->toArray());

        return response()->json([
            'data' => $user
        ]);
    }

    public function delete ($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'user' => $user,
            'status' => 'success'
        ]);
    }

    public function newuser()
    {
//        return view('newuser');
        return response()->json();
    }

    public function adduser(Request $request)
    {
        $valid = request()->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'password'=>'required',
        ]);

        $insert = User::create($request->toArray());


//        return redirect()->route('userslist');
        return response()->json($insert);

    }

    public function store(Request $request): RedirectResponse
    {
        $podcast = Podcast::create(/* ... */);

        // ...

        ProcessPodcast::dispatch($podcast);

        return redirect('/podcasts');
    }
}



