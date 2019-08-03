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
  public function updateProfile(Request $request){
        // Form validation
        $request->validate([
            'username'              =>  'string',
            'profile_image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            //'email' => 'string|email|max:255',
            //'bio' =>  'string|max:140',
            //'teléfono'=> 'min:10',
            // 'password' =>  'string|min:6|confirmed'
        ]);

        // Get current user
        $user = Auth::user();

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            $path = $request->file('profile_image')->store('/public/profilePictures');
            $file = basename($path);
            $user->profile_image = $file;
        }

        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->bio = $request['bio'];
        $user->teléfono = $request['teléfono'];
        $user->país= $request['país'];

        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect('/home');
    }
}
