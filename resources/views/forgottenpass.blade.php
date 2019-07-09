@extends("template")
@section("title")
  Foodseason - Olvidé mi contraseña
@endsection
@section("body")
  <body class = "forgotten-recover-body">
    @include("partials\header")
    <section class="register" id="login">
          <div class="container">
           <div class="formulario">


    		  <form action="forgottenPass.php" method="post" class="form-signup">
    		   <h3 class="form-signup-heading">¡Recuperemos tu contraseña!</h3>
    		   <div class="form-group">
    		    <input name="username" type="text" class="form-control" placeholder="Usuario" value="">
           </div>
           <div class="form-group">
             <select class="form-control" name="question" >
               <option selected>Selecciona una pregunta de seguridad</option>
               <option value="mascota">Nombre de tu primer mascota. </option>
               <option value="comida">Nombre de tu comida favorita.</option>
               <option value="infancia">Nombre de tu mejor amigo de la infancia.</option>
             </select>
           </div>
           <div class="form-group">
            <input type="password" class="form-control" name="secretAnswer" placeholder="Ingresa tu respuesta secreta" value= "">
           </div>
    		   <button class="btn btn-warning" style="width:50%" id="submit" type="submit" name="subm">Recuperar contraseña</button>
    		   <br/><br>
    		   <a class="btn btn-light" href="signup.php" role="button">¿Todavía no tenés una cuenta?</a>

    		  </form>

           </div>
          </div>
    </section>

@endsection

















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
