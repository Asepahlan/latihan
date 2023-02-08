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
        return redirect()->intended('member');
    }
    return redirect()->back();

    }
}
