@extends("layouts.template")
@section("title")
Foodseason - Feed
@endsection
@include('partials.header')
@section("body")
  <body class="profile-body">
        <div class="container">
        <div class="page-header header-filter" data-parallax="true"></div>
        <div class="main main-raised">
          <div class="profile-content">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                      <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="profile" role="tab" data-toggle="tab">
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
                              <a href= "{{$user->username}}/follows" class="nav-link" role="tab" data-toggle="tab">
                                <i class="fas fa-users"></i>
                                  Seguidos: <span class="badge badge-secondary">{{$user->follows->count()}}</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{$user->username}}/followers" class="nav-link"  role="tab" data-toggle="tab">
                                <i class="fas fa-user-friends"></i>
                                  Seguidores: <span class="badge badge-secondary">{{$user->followers->count()}}</span>
                              </a>
                          </li>
                        </ul>
                      </div>
          </div>
          </div>

                  @foreach ($friendsRecipes as $recipe)
                    @include('partials.bigRecipe')
                  @endforeach

          			</div>
          		</div>
            </div>
        </div>

  </body>
  @endsection
</html>
