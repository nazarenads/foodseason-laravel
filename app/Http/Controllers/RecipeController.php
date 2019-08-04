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
     public function indexOfTags()
     {
       $listOfTags = Tag::all();
       // $listOfTagNames = Tag::get('tagName');

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

      $recipe = new Recipe();

      $path = $request->file('photoName')->store('public/recipesPictures');
      $file = basename($path);

      $recipe->title = $request['title'];
      $recipe->recipeBody = $request['recipeBody'];
      // $recipe->photoName = $request['photoName'];
      $recipe->user_id = Auth::user()->id;
      $recipe->image = $file;
      $recipe->tag_id = $request['tag'];

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('addRecipe');
     }

     public function show($id)
       {
         $recipe = Recipe::find($id);
         return view('recipe', compact('recipe'));
       }

       public function tag($id){
        $recipes = Recipe::where('tag_id', $id)->paginate(5);

        $recipes = Tag::find($id);

        return view('tag', compact('recipes', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
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
