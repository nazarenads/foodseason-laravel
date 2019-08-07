@extends("layouts.template")
@section("title")
Foodseason - Profile
@endsection
<link rel="icon" href="{{ asset('img/foodseasonicon.ico') }}">
@section("body")
  <body class="profile-body">
        @include('partials.header')
    <div class="container">
    <div class="page-header header-filter" data-parallax="true"></div>
  <div class="main main-raised">
  <div class="profile-content">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                   <div class="profile">
                        <div class="avatar center">
                          @if ($user->profile_image)
                            <img src="storage/profilePictures/{{$user->profile_image}}"  class="img-raised rounded-circle img-fluid">
                          @else
                            <img src="img/profiledefault.png"  class="img-raised rounded-circle img-fluid">
                          @endif
                          {{ $user->username }}

                        </div>
                        <div class="name">
                            <h3 class="title text-center">  {{$user->username }}</h3>
                        </div>
                    </div>
                </div>
              </div>
              <div class="description text-center">
                  <p>{{ $user->bio }}</p>
                  @if(Auth::user()->id==$user->id)
                  <li class="nav-item">
                    <a href="editprofile" class="btn btn-light" style="background-color:#EB6E80; color:white;"> <i class="fas fa-user-edit"></i> Editar perfil </a>
                    <a href="addRecipe" class="btn btn-light"  style="background-color:#E9B000;color:white;"> <i class="fas fa-seedling"></i> Nueva receta </a>
                  </li>
                  @endif
              </div>
              <br>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
                      <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                          <!-- <li class="nav-item">
                              <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                <i class="fas fa-book"></i> Mis recetas
                              </a>
                          </li> -->
                          <!-- <li class="nav-item">
                              <a class="nav-link" href="favrecipes" role="tab" data-toggle="tab">
                              <i class="far fa-heart"></i>
                                  Recetas favoritas
                              </a>
                          </li> -->
                          <li class="nav-item">
                              <a href= "{{$user->username}}/follows" class="nav-link" >
                                <i class="fas fa-users"></i>
                                  Seguidos: <span class="badge badge-secondary">{{$user->follows->count()}}</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{$user->username}}/followers" class="nav-link">
                                <i class="fas fa-user-friends"></i>
                                  Seguidores: <span class="badge badge-secondary">{{$user->followers->count()}}</span>
                              </a>
                          </li>

                        </ul>
                      </div>
          </div>
          </div>
          <div>

            <main role="main">

              <div class="album py-5 bg" style="background-color: white;">
                <div class="container">

                  <div class="row">
                    @foreach ($listOfRecipes as $recipe)
                    <div class="col-md-4">
                      <div class="card mb-4 shadow-sm">
                        <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}" height="230px" width="200px">
                        <div class="card-body">
                          <h4 style="color:black;"><strong>{{$recipe->title}}</strong></h4>
                          <p class="card-text" style="height:150px; overflow:hidden;">{{$recipe->recipeBody}}</p>

                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              @auth
                              <a href="recipe/{{$recipe->id}}" class="special-link btn btn-danger" style="text-decoration:none; background-color:#E24E42; margin:20%; border-radius: 50%;">  Ver más... </a>
                            @else
                              <a href="editrecipe/{{$recipe->id}}" class="special-link btn btn-warning" style="text-decoration:none;background-color:#E9BE00; margin:auto;border-radius: 50%;"><i class="far fa-edit"></i></a>
                            @endauth
                            </div>
                            <small class="text-muted">

                                <form action="deleterecipe/{{$recipe->id}}" method="get">

                                @csrf

                                <input type="hidden" name="id" value="{{$recipe->id}}">
                                @guest
                                <button type= "submit" class="btn btn-info" style="background-color: #008F95; color:white; border-radius: 50%;"><i class="far fa-trash-alt"></i></button>
                              @endguest
                                  <form action="deleterecipe/{{$recipe->id}}" method="get">
                                  @csrf
                              </form>

                          </small>

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
        </div>
  </body>
</html>
  @endsection
