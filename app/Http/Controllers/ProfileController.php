<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;

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
            'password' => 'required|string|min:6',
            //'newpassword' => 'required|string|min:6|confirmed'
        ],[
          'required'=>'Tenés que ingresar tu contraseña',
          'confirmed'=>'Tus contraseñas no coinciden'
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

        // Check if the password matches
        if (!(Hash::check($request->get('password'), Auth::user()->password))) {
            $errorPassword = "Contraseña incorrecta";
          return view('editprofile', compact('errorPassword'));
        }
        //Check if the new password is different from the old password
       //  if (!(Hash::check($request->get('newpassword'), Auth::user()->password))) {
       //     $errorNewPassword = "Tu nueva contraseña no puede ser igual a tu contraseña anterior!";;
       //     return view('editProfile', compact('errorNewPassword'));
       // }
       if($request['newpassword']){
         $user->password = bcrypt($request->get('newpassword'));
       }
       //persists user info to database
       $user->save();

        // Return user back and show a flash message
        return redirect('/home');
    }


}
