<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'avatar' => 'required|image',
            'background_img' => 'required|image',
            'introduction' => 'required'
        ]);
        
        $user = Auth::user();
        // avatar
        if($request->hasFile('avatar')){
            $avatar = $request->avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            Storage::disk('public')->put($avatar_new_name, file_get_contents($avatar));
            $user->profile->avatar = $avatar_new_name;
            $user->profile->save();
        }
        
        // background_image
        if($request->hasFile('background_img')){
            $background = $request->background_img;
            $background_new_name = time().$background->getClientOriginalName();
            Storage::disk('public')->put($background_new_name, file_get_contents($background));
            $user->profile->background_image = $background_new_name;
            $user->profile->save();
        }
        
        $user->name = $request->name;
        $user->profile->introduction = $request->introduction;
        
        $user->save();
        $user->profile->save();

        // Session::flash('success', 'Account Profile Stored Successfully');

        return redirect()->back();
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
