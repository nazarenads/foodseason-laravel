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

  public function create()
  {
      return view('editprofile');
  }


  public function updateProfile(Request $request){
        // Form validation
        $rules=[
            'username'              =>  'string',
            'profile_image'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'string|email|max:255',
            //'bio' =>  'string|max:140',
            //'teléfono'=> 'min:10',
            'currentPassword' => 'required|string|min:6',
            'password' => 'string|min:6|confirmed'
        ];
        $messages=[
          'required'=>'Tenés que ingresar tu contraseña',
          'confirmed'=>'Tus contraseñas no coinciden',
          'email'=>'Tenés que ingresar un email válido',
          'image'=>'El archivo que intentaste subir no es una imagen',
          'max:2048'=>'Esa foto es muy pesada'
        ];

        $this->validate($request, $rules, $messages);

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
        if (!(Hash::check($request->get('currentPassword'), Auth::user()->password))) {
            $errorPassword = "Contraseña incorrecta";
          return view('editprofile', compact('errorPassword'));
        }
        //Check if the new password is different from the old password
       //  if (!(Hash::check($request->get('newpassword'), Auth::user()->password))) {
       //     $errorNewPassword = "Tu nueva contraseña no puede ser igual a tu contraseña anterior!";;
       //     return view('editProfile', compact('errorNewPassword'));
       // }
       if($request['password']){
         $user->password = bcrypt($request->get('password'));
       }
       //persists user info to database
       $user->save();

        // Return user back and show a flash message
        return redirect('/home');
    }


}
