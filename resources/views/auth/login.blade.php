@extends('layouts.template')


@section("title")
Foodseason - Iniciar sesión
@endsection

@section("body")
    @include('\partials\header')
  <body class ="signin-signup-body">

    <section class="register" id="login">
          <div class="container-signin-signup">
           <div class="form-signin-signup">

        <form method="POST" action="{{ route('login') }}" class="form-signup">
                 @csrf

    		   <h3 class="form-signup-heading">¡Iniciá sesión!</h3>


           <div class="form-group">
    		    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Usuario" value="">
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
           </div>



    		   <div class="form-group">
    		    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" value="">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

           </div>

           <div class="form-check">
               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

               <label class="form-check-label" for="remember">
                   {{ __('Recordarme') }}
               </label>
           </div>

           <div class="form-group">
             <button style="width:100%" id="submit" type="submit" name="subm" class="btn btn-warning btn-signin-signup">
                 {{ __('Ingresar') }}
             </button>
             <br/><br>
             <a class="btn btn-light btn-light-signin-signup" href="signup.php" role="button">¿Todavía no tenés una cuenta?</a>

             @if (Route::has('password.request'))
                 <a class="btn btn-light btn-light-signin-signup" href="{{ route('password.request') }}" role="button">
                     {{ __('¿Te olvidaste tu contraseña?') }}
                 </a>
             @endif
           </div>
    		  </form>

           </div>
          </div>
    </section>
</body>
@endsection
