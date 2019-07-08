
@extends("template")
@section("title")
Foodseason - Iniciar sesión
@endsection

@section("body")
  <body class ="signin-signup-body">

    <section class="register" id="login">
          <div class="container-signin-signup">
           <div class="form-signin-signup">


    		  <form action="signin.php" method="post" class="form-signup">
    		   <h3 class="form-signup-heading">¡Iniciá sesión!</h3>
    		   <div class="form-group">
    		    <input name="username" type="text" class="form-control" placeholder="Usuario" value="">

           </div>
    		   <div class="form-group">
    		    <input type="password" class="form-control" name="password" placeholder="Contraseña" value="">
           </div>
           <div class="form-check">
             <input type="checkbox" class="form-check-input" id="materialUnchecked" name="remember" value= "1">
             <label class="form-check-label" for="materialUnchecked">Recordarme</label>
           </div>
    		   <button class="btn btn-warning btn-signin-signup" style="width:100%" id="submit" type="submit" name="subm">Ingresar</button>
    		   <br/><br>
    		   <a class="btn btn-light btn-light-signin-signup" href="signup.php" role="button">¿Todavía no tenés una cuenta?</a>
    		   <a class="btn btn-light btn-light-signin-signup" href="forgottenPass.php" role="button">¿Te olvidaste tu contraseña?</a>
    		  </form>

           </div>
          </div>
    </section>
</body>
@endsection
