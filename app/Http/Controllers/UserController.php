<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    function auth(Request $request){

    $credential = $request->only('email', 'password');
    if(Auth::attempt($credential)){
        return redirect()->intended('home');
    }
    return redirect()->back();

    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
