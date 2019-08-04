@extends("layouts.template")
@section("title")
Foodseason - Profile
@endsection
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
                          @if (Auth::user()->profile_image)
                            <img src="storage/profilePictures/{{Auth::user()->profile_image}}"  class="img-raised rounded-circle img-fluid">
                          @else
                            <img src="img/profiledefault.png"  class="img-raised rounded-circle img-fluid">
                          @endif
                          {{ Auth::user()->username }}

                        </div>
                        <div class="name">
                            <h3 class="title text-center">  {{ Auth::user()->username }}</h3>
                        </div>
                    </div>
                </div>
              </div>
              <div class="description text-center">
                  <p>{{ Auth::user()->bio }}</p>
                  <li class="nav-item">
                    <a href="editprofile" class="btn btn-light"> <i class="fas fa-user-edit"></i> Editar perfil </a>
                    <a href="addRecipe" class="btn btn-light"> <i class="fab fa-nutritionix"></i> Nueva receta </a>
                  </li>
              </div>
              <br>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
                      <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                <i class="fas fa-book"></i> Mis recetas
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="favrecipes" role="tab" data-toggle="tab">
                              <i class="far fa-heart"></i>
                                  Recetas favoritas
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="following" role="tab" data-toggle="tab">
                                <i class="fas fa-users"></i>
                                  Seguidos: <span class="badge badge-secondary">{{$user->follows->count()}}</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="followers" role="tab" data-toggle="tab">
                                <i class="fas fa-user-friends"></i>
                                  Seguidores: <span class="badge badge-secondary">{{$user->followers->count()}}</span>
                              </a>
                          </li>

                        </ul>
                      </div>
          </div>
          </div>
          <div class="container">
      			<div class="row">
      				<!-- column-8 -->

              {{-- @php
                dd($listOfRecipes);
              @endphp --}}

              @foreach ($listOfRecipes as $recipe)
              @include('partials.bigRecipe')
              @endforeach
      				<!-- /column-8 -->

      				<!-- column-4 -->

      				<!-- /column-4 -->
      			</div>
      		</div>

        </div>
  </body>
</html>
  @endsection
