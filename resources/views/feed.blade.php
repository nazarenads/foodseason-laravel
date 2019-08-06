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
