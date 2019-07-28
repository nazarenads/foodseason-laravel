@extends("layouts.template")
@section("title")
Foodseason - Registrarse
@endsection
@section("body")
    @include('\partials\header')
  <body class ="signin-signup-body">

    <section class="register" id="register">
          <div class="container-signin-signup">
           <div class="form-signin-signup">

          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                 @csrf

    		   <h3 class="form-signup-heading">¡Registrate!</h3>
    		   <div class="form-group">
    		    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" >
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
    		   </div>
    		   <div class="form-group">
    		    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Usuario" value="{{ old('name') }}">
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
           </div>
            {{-- <div class="form-group">
    		    <input name="profilePicture" type="file" value="">

    		   </div> --}}
    		   <div class="form-group">
    		    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" value="">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
           </div>
            <div class="form-group">
    		   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetí tu contraseña">
    		   </div>
           {{-- <div class="form-group">
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

           <div class="form-group">
          <input type="password" class="form-control" name="secretAnswerConfirm" placeholder="Confirma tu respuesta secreta" value= "">
         </div> --}}
           <button type="submit" class="btn btn-warning btn-signin-signup" style="width:100%">
               {{ __('Crear cuenta') }}
           </button>
    		   <br/><br>
    		   <a class="btn btn-light btn-light-signin-signup" href="{{ route('login') }}" role="button">¿Ya tenés una cuenta?</a>
           @if (Route::has('password.request'))
               <a class="btn btn-light btn-light-signin-signup" href="{{ route('password.request') }}" role="button">
                   {{ __('¿Te olvidaste tu contraseña?') }}
               </a>
           @endif

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
