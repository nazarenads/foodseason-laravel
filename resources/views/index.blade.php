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
          <main role="main">

            <div class="album py-5 bg" style="background-color: white;">
              <div class="container">

                <div class="row">
                  @foreach ($recipes as $recipe)
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm" >
                      <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}" height="230px" width="200px">
                      <div class="card-body">
                        <p class="card-text" style="height:150px; overflow:hidden;">{{$recipe->recipeBody}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="recipe/{{$recipe->id}}" class="special-link" style="text-decoration:none; background-color:#008F95; margin:20%; "> <i class="fas fa-glasses"></i> Ver más</a>
                            @auth<a href="editrecipe/{{$recipe->id}}" class="special-link" style="text-decoration:none;background-color:#EB6E80; margin:auto;"><i class="far fa-edit"></i></a>@endauth
                          </div>
                          <small class="text-muted">@auth
                            <form action="deleterecipe/{{$recipe->id}}" method="get">
                          @csrf
                          <input type="hidden" name="id" value="{{$recipe->id}}">
                          <button type= "submit" class="btn btn-info" style="background-color: #008F95; color:white"><i class="far fa-trash-alt"></i></button>
                          </form>
                          @endauth</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>

          </main>


              </div>
            </div>
          </div>
      </div>

</body>

@endsection
