@extends('layouts.template')
@section("title")
  Foodseason - Índice de recetas
@endsection
@include('partials.header')

@section("body")

<body class="profile-body">
  <div class="container">
  <div class="page-header header-filter" data-parallax="true"></div>
<div class="main main-raised">
<div class="profile-content">


@foreach ($recipes as $recipe)
@include('partials.bigRecipe')
@endforeach

{{-- @php
  dd($recipes);
@endphp --}}

</div>
</div>
</div>

</body>
@endsection
