<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Tag;
use Auth;
use Illuminate\Http\Request;
use DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
         $recipes = Recipe::paginate(5);
         return view('index', compact('recipes'));
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

      $recipe = new Recipe();

      $path = $request->file('photoName')->store('public/recipesPictures');
      $file = basename($path);

      $recipe->title = $request['title'];
      $recipe->recipeBody = $request['recipeBody'];
      // $recipe->photoName = $request['photoName'];
      $recipe->user_id = Auth::user()->id;
      $recipe->image = $file;
      $recipe->tag_id = $request['tag'];
      $recipe->save();

      return view('recipe', compact('recipe'));
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

       public function showUserRecipes()
         {
           $user_id = Auth::user()->id;
           $listOfRecipes = Recipe::where('user_id', $user_id)->orderBy('created_at','desc')->get();;
           return view('profile', compact('listOfRecipes', 'user_id'));
         }

       public function filterByTagName($tagName){

        $tag_id = Tag::where('tagName', $tagName)->pluck('id')->first();

        $recipes = Recipe::where('tag_id', $tag_id)->paginate(5);

        return view('index', compact('recipes'));
    }
      // public function showSearch($palabra){
      //
      //    return view('/filter', compact('palabra'));
      // }

      public function searchRecipes($palabra){
        $recipes = DB::table('recipes')
            ->join('tags', 'recipes.tag_id', '=', 'tags.id')
            ->select('recipes.id', 'recipes.title AS recipeTitle', 'recipes.image', 'recipes.recipeBody AS recipeBodynom', 'tags.tagName AS tagNom')
            ->having('recipeTitle', 'like', "%$palabra%")
            ->orHaving('tagNom', 'like', "%$palabra%")
            ->orHaving('recipeBodynom', 'like', "%$palabra%")
            ->get();
        return view('filter', compact('recipes', 'palabra'));

      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
     public function showDestroy($id){

         $recipe = Recipe::find($id);
         return view('/deleterecipe', compact('recipe'));
     }

     public function destroy(Request $request){

       $recipe = Recipe::find($request['id']);
       $recipe->delete();
       return redirect('/home');
     }



}
