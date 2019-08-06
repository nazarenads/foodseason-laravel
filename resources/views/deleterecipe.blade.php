@extends("layouts.template")
@section("title")
Foodseason - Eliminar receta
@endsection
@section("body")
@include('partials.header')
      <body class="home-body">

        <div class="" >
            <h2>¿{{ Auth::user()->username }} estás segur@ de que querés eliminar esta receta?</h2>

        </div>


      <div class="col-12 col-md-8">
        <article class="big-recipe">
          <h2 class="recipe-title">{{$recipe->title}}</h2>
          <img alt="" class="img-with-border" src="/storage/recipesPictures/{{$recipe->image}}">
          <h3></h3>
          <p>{{$recipe->recipeBody}}</p>
          <hr>
        </article>

      </div>
      <form action="" method="post" style='display:flex; justify-content:center;'>
        @csrf
        <input type="hidden" name="id" value="{{$recipe->id}}">
        <button class="btn btn-danger btn-signin-signup" style="width:15%; " type="submit" name="" value="">Eliminar</button>
      </form>


    </body>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>
@endsection
