@extends("template")
@section("title")
Foodseason - Recuperar contraseña
@endsection
@section("body")
  <body class= "forgotten-recover-body">
      @include('partials.header')

    <section class="register" id="register">
          <div class="container">
           <div class="formulario">
    		  <form action="recoverPass.php" method="post" class="form-signup" enctype="multipart/form-data">
    		   <h3 class="form-signup-heading">¡Crea una nueva contraseña!</h3>
    		   <div class="form-group">
    		    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?=$password?>">
            <?= $errorPassword ?>
           </div>
            <div class="form-group">
    		    <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirmar contraseña" value= "<?=$passwordConfirm?>">
    		   </div>
    		   <button class="btn btn-warning" style="width:100%" type="submit" name="submit">Cambiar contraseña</button>
    		   <br/><br>
    		   <a class="btn btn-light" href="signin.php" role="button">Ingresar a tu cuenta</a>

          </form>

           </div>
         </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
@endsection
