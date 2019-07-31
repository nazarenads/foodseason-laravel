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
      // $reglas = [
      //     'title' => 'required | alpha',
      //     'subtitle' => 'required | string',
      //     'recipe' => 'required | string'
      // ];
      //
      // $mensajes = [
      //   'required' => 'El campo es obligatorio',
      //   'alpha' => 'El campo debe contener solo eltrass',
      // ];
      //
      // $this->validate($request, $reglas, $mensajes);

      $recipe = new Recipe();
      $recipe->title = $request['title'];
      $recipe->RecipeBody = $request['RecipeBody'];
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
