<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;


class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('editprofile');
  }
  public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'username'              =>  'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'bio' =>  'string|max:140',
            // 'teléfono'=> 'int|min:10',
            // 'password' =>  'string|min:6|confirmed'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);


        //Set user name
        // $user->username = $request->input('username');
        // $user->email = $request->input('email');
        // if ($request->has('bio')) {
        // $user->bio = $request->input('bio');
        // }
        // if ($request->has('país')) {
        // $user->país = $request->input('país');
        // }
        // if ($request->has('teléfono')) {
        // $user->teléfono = $request->input('teléfono');
        // }
        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            $path = $request->file('profile_image')->store('/public/profilePictures');
            $file = basename($path);
            $user->profile_image = $file;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Tu perfil fue actualizado con éxito!']);
    }
}
