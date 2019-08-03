<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('profile');
  }
  public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'username'              =>  'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->username = $request->input('username');
        //$user->email = $request->input('email');
        //$user->bio = $request->input('bio');

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            $path = $request->file('profile_image')->store('storage/storage/profilePictures');
            $file = basename($path);
            $user->profile_image = $file;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Tu perfil fue actualizado con éxito!']);
    }
}
