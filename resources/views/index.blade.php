@extends('layouts.template')
@section("title")
  Foodseason - Índice de recetas
@endsection
@section("body")
<body class="profile-body">
@include('partials.header')

@foreach ($recipes as $recipe)
@include('partials.bigRecipe')
@endforeach

{{-- @php
  dd($recipes);
@endphp --}}


</body>
@endsection
