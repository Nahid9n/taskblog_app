<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\UserAuth;
use Illuminate\Http\Request;
use Session;
use URL;

class UserAuthController extends Controller
{
    private $user;
    public function index(){
        return view('website.login.index');
    }
    public function login(Request $request){
        $this->user = UserAuth::where('email',$request->email)->first();
        if($this->user){
            if(password_verify($request->password, $this->user->password)){
                Session::put('user_id',$this->user->id);
                Session::put('user_name',$this->user->name);
                Session::put('user_email',$this->user->email);
                return redirect('/');
            }
            else
            {
                return back()->with('message','sorry....invalid password.');
            }
        }
        else{
            return back()->with('message','sorry....invalid email.');
        }
    }
    public function indexRegister(){
        return view('website.register.index');
    }
    public function register(Request $request){

        $this->user = UserAuth::registerUser($request);
        Session::put('user_id',$this->user->id);
        Session::put('user_name',$this->user->name);
        Session::put('user_email',$this->user->email);
        return redirect('/');
    }
    public function logout(){
        Session::destroy('user_id');
        Session::destroy('user_name');
        Session::destroy('user_email');
        return redirect('/');
    }

}
