@extends('layouts.template')
@section("title")
  Foodseason - Índice de recetas
@endsection
@section("body")
<body class="profile-body">
@include('partials.header')

@foreach ($listOfRecipes as $recipe)
@include('partials.bigRecipe')
@endforeach




</body>
@endsection
