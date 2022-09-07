<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;

class SignoutController extends Controller
{
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success', 'Logout Successfull');
    }
}
