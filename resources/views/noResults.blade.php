@extends("layouts.template")
@section("title")
Foodseason - Resultados
@endsection
<link rel="icon" href="{{ asset('img/foodseasonicon.ico') }}">
@section("body")
@include('partials.header')

  <body class="editprofile-body" >

    <div class="container" style="display:flex; align-items:baseline; justify-content:center;">
      <div class="page-header header-filter" data-parallax="true" ></div>

          <div class="profile-content">
            <div class="row">
              <div class="col-md-6 ml-auto mr-auto" >
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="color:#4C4C4C;">
                <strong> Intentá de nuevo!</strong> No encontramos resultados para tu búsqueda <i class="fas fa-heart-broken" style="color:#"></i>
                 <a href="addRecipe" style="color:#4C4C4C; text-decoration:none;"> O... ¿por qué no subís tu propia receta? <i class="fas fa-plus-circle"></i></a>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
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
</body>
@endsection
