<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function show_blog(){

        return view('account.user_profile.show');
}

public function edit_blog(Request $request){
    $request->validate([
        'bio'=> 'required|string',
        'location'=>'required|string',
        'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user=Auth()->user();

    $user_id=$user->id;

    $profile = new Profile();
    $profile->user_id=$user_id;
    $profile->bio = $request->bio;
    $profile->location= $request->location;
    $image= $request->image;

    if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogimage'), $imagename);
            $profile->image = $imagename;
    }


    $profile->save();
    return redirect()->back()->with('success','profile changed successfully');






}
}
