<?php

namespace App\Http\Controllers;

use App\Recipe;
use Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //indexa todas las recetas que tengas en la base de datps
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devuelve la vsta con e formulario para crear receta
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // $rules = [
      //   'title' => "required",
      //   'user_id' => "required",
      //   'recipeBody' => "required",
      //   'photoName' => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
      // ];
      // $messages = [
      //   'required' => "Este campo es obligatorio"
      // ];
      //
      // $this->validate($request, $rules, $messages);

      $recipe = new Recipe();

      $path = $request->file('photoName')->store('public/recipesPictures');
      $file = basename($path);

      $recipe->title = $request['title'];
      $recipe->recipeBody = $request['recipeBody'];
      // $recipe->photoName = $request['photoName'];
      $recipe->user_id = Auth::user()->id;
      $recipe->save();

      return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //te muestras una receta
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
