@extends("template")
@section("title")
Foodseason - Recetas
@endsection
@section("body")
  <body class="home-body">
    @include('\partials\header')
    <div class="container">
      <article class="get">
        <h2>Tus recetas</h2>
        <div class="container">
            <div class="card" style="margin-top:30px; width: 18rem;">
            <img class="card-img-top" src="recipePictures/usernameRecipePicture.jpg" alt="">
              <div class="card-body">
              <h5 class="card-title" style= "color: black;"></h5>
              <p class="card-text" style= "color: black;"></p>
              <a href="updateRecipe.php?id=" class="btn btn-warning" style="width:30%; margin:auto; color:white;">Editar</a>
              <a href="deleteRecipe.php?id=" class="btn btn-warning" style="width:30%; margin:auto; color:white;">Eliminar</a>
              </div>
            </div>
        </div>
      </article>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
@endsection
