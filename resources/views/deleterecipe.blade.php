<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @extends("layouts.template")
    @section("title")
    Foodseason - Eliminar Receta
    @endsection
<link rel="icon" href="{{ asset('img/foodseasonicon.ico') }}">
    @include('partials.header')
  </head>
@section("body")
<body class="profile-body">
  <h2>¿{{ Auth::user()->username }} estás segur@ de que querés eliminar esta receta?</h2>

  <div class="container">
    <div class="page-header header-filter" data-parallax="true"></div>
    <div class="main main-raised">
    <div class="profile-content">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto">
                 <div class="profile">
                     <h2 class="recipe-title">{{$recipe->title}}</h2>
                      <div class="recipeimg center">
                        <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}">
                        <br>
                      </div>
                      <div class="name">
                      <h3 style="color:#696969;">{{$recipe->title}}</h3>
                      <strong style="color:#42403F;">{{$recipe->recipeBody}}</strong>
                      <form action="" method="post" style='display:flex; justify-content:center;'>
                        @csrf
                        <input type="hidden" name="id" value="{{$recipe->id}}">
                        <button class="btn btn-danger btn-signin-signup" style="width:15%; " type="submit" name="" value="">Eliminar</button>
                      </form>

                      <hr>
                      </div>
                  </div>
              </div>
            </div>

      </div>
      </div>
      </div>
      </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</div>
@endsection
</html>
