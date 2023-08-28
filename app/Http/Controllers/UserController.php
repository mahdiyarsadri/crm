<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginPanel(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('panel');

        }

        return back()->withErrors([
            'email' => 'شماره تماس وارد شده یافت نشد!',
        ])->onlyInput('email');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('loginPanel');


    }
}



