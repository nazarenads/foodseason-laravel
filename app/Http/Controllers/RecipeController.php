<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Tag;
use Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
         $listOfRecipes = Recipe::paginate(5);
         return view('index', compact('listOfRecipes'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     /**
      * Display the specified resource.
      *
      * @param  \App\Recipe  $recipe
      * @return \Illuminate\Http\Response
      */
      public function create()
      {
         $listOfTags = Tag::all();
         return view('addRecipe', compact('listOfTags'));
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
        'title' => "required",
        'recipeBody' => "required",
        'photoName' => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
      ];
      $messages = [
        'required' => "Este campo es obligatorio"
      ];

      $this->validate($request, $rules, $messages);

      $newrecipe = new Recipe();

      $path = $request->file('photoName')->store('public/recipesPictures');
      $file = basename($path);

      $newrecipe->title = $request['title'];
      $newrecipe->recipeBody = $request['recipeBody'];
      // $recipe->photoName = $request['photoName'];
      $newrecipe->user_id = Auth::user()->id;
      $newrecipe->image = $file;
      $newrecipe->tag_id = $request['tag'];
      $newrecipe->save();

      return view('recipe', compact('newrecipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listOfTags = Tag::all();
        $recipe = Recipe::find($id);
        return view('editrecipe', compact('listOfTags', 'recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $rules = [
         'title' => "required",
         'recipeBody' => "required",
      //   'photoName' => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
      ];
      $messages = [
         'required' => "Este campo es obligatorio"
      ];
      //
      $this->validate($request, $rules, $messages);

      //traigo la receta original que quiero editar
      $recipe = Recipe::find($id); // esto no anda se ve, porque si lo devolvemos eventualmente algo se da cuenta que no es nada

      if($request->file('photoName')){
          $path = $request->file('photoName')->store('public/recipesPictures');
          $file = basename($path);
          $recipe->image = $file;
      }
      //
      $recipe->title = $request['title'];
      $recipe->recipeBody = $request['recipeBody'];
      // $recipe->photoName = $request['photoName'];
      $recipe->user_id = Auth::user()->id;
      $recipe->tag_id = $request['tag'];
      $recipe->save();

      $listOfTags = Tag::all();
      return redirect('/index');
    }


     public function show($id)
       {
         $recipe = Recipe::find($id);
         return view('recipe', compact('recipe'));
       }

       public function showUserRecipes()   {
           $user = Auth::user();
           $listOfRecipes = Recipe::where('user_id', $user->id)->get();
           return view('profile', compact('listOfRecipes', 'user'));
         }

       public function filterByTagName($tagName){

        $recipes = Recipe::where('tagName', $tagName)->paginate(5)->get();

        return view('index', compact('recipes'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
