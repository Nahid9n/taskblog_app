<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Session;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.profile.index',[
            'profiles'=>UserProfile::where('username',Session::get('user_name'))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.profile.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UserProfile::addProfile($request);
        return back()->with('message','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserProfile $userProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserProfile $userProfile)
    {
        return view('user.profile.edit',[
            'userProfile'=>UserProfile::find($userProfile->id),
            'profiles'=>UserProfile::where('username',Session::get('user_name'))->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        UserProfile::updateProfile($request,$userProfile->id);
        return redirect('userProfile')->with('message','update profile info successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserProfile $userProfile)
    {

    }
}
