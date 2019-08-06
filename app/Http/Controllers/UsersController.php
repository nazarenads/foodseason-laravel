<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recipe;
use Auth;

class UsersController extends Controller {
    private function findByUsername($username) {
        return User::where('username', $username)->first();
    }

    public function show($username) {
        $user = $this->findByUsername($username);
        $listOfRecipes = Recipe::where('user_id', $user->id)->get();
        return view('profile', compact('listOfRecipes', 'user'));

    }

    public function follow($username, Request $request) {
        $user = $this->findByUsername($username);

        $me = $request->user();

        $me->follows()->attach($user);

        return redirect('/newfriends');
    }

    public function unfollow($username, Request $request) {
        $user = $this->findByUsername($username);

        $me = $request->user();

        $me->follows()->detach($user);

        return redirect('/newfriends');
    }

    public function followers($username)
    {
        $user = $this->findByUsername($username);

        return view('followers', [
            'user' => $user,
            'followers' => $user->followers,
            'method' => 'followers',
        ]);
    }

    public function follows($username) {
        $user = $this->findByUsername($username);

        return view('following', [
            'user' => $user,
            'follows' => $user->follows,
            'method' => 'follows',
        ]);
    }
    public function showFollowedRecipes(){

      if(count(Auth::user()->follows()->get())==0){
      $recipes = Recipe::paginate(5);
      return view('index', compact('recipes'));
      }

      $friendsRecipes = Recipe::whereIn('user_id', Auth::user()->follows()->pluck('id'))->get();
      return view('feed', compact('friendsRecipes'));
    }

}
