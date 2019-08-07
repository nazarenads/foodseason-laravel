@extends('layouts.template')


@section("title")
Foodseason - Iniciar sesión
@endsection

@section("body")
    @include('partials.header')
  <body class ="signin-signup-body">

    <section class="register" id="login">
          <div class="container-signin-signup">
           <div class="form-signin-signup">

        <form method="POST" action="{{ route('login') }}" class="form-signup">
                 @csrf

    		   <h3 class="form-signup-heading">¡Iniciá sesión!</h3>


           <div class="form-group">
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

               @error('email')
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ 'Email incorrecto' }}</strong>
                 </span>
               @enderror
           </div>



    		   <div class="form-group">
    		    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" value="">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ 'Contraseña incorrecta' }}</strong>
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
             <button type="submit" class="btn btn-warning btn-signin-signup" style="width:100%">
                 {{ __('Ingresar') }}
             </button>
             <br/><br>
             <a class="btn btn-light btn-light-signin-signup" href="{{ route('register') }}" role="button">¿Todavía no tenés una cuenta?</a>

             @if (Route::has('password.request'))
                 <a class="btn btn-light btn-light-signin-signup" href="" role="button">
                     {{ __('¿Te olvidaste tu contraseña?') }}
                 </a>
             @endif
           </div>
    		  </form>

           </div>
          </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>
@endsection
