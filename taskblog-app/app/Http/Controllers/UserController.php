<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard.index');
    }
    public function profile(){
        return view('user.profile.index');
    }
}
