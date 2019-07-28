@extends('layouts.template')
@section("title")
Foodseason - Editar perfil
@endsection

@section("body")
    @include('\partials\header')
  <body class= "editprofile-body">
    <div class="container">
      <br>
        <h1 style="margin-top:60px; font-family: 'Raleway', sans-serif;">Editar perfil</h1>
      <br>
      	<hr>
    	<div class="row">
          <!-- <div class="col-12">
            <div class="text-center">
              <img src="img\profiledefault.png" class="avatar-editprofile" alt="avatar">
                <br>
              <div class="form-group">
                <br>
                <br>
              <input name="profilePicture" type="file" value="">
             </div>
            </div> -->
<br>
<br>
            <div class="formulario">
           <form action="editprofile.php" method="post" class="form-editprofile" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
               <label for="username"><h4>Tu nombre de usuario es:</h4></label>
              <h4></h4>
             </div>

            <div class="form-group">
              <label for="email"><h4>Ingresa tu nuevo email:</h4></label>
             <input name="email" type="text" class="form-control" placeholder="Email" value="">
            </div>

            <div class="form-group">
              <label for="password"><h4>Ingresa tu nueva contraseña:</h4></label>
             <input type="password" class="form-control" name="password" placeholder="Contraseña" value="">
            </div>
             <div class="form-group">
               <label for="passwordConfirm"><h4>Confirma tu nueva contraseña:</h4></label>
             <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirmar contraseña" value= "">
            </div>
            <br>
            <br>
            <button class="btn btn-warning" style="width:100%; margin:auto; color:white;" type="submit" name="submit">Guardar cambios</button>
           </form>

            </div>

          </div>
      </div>
    </div>
    <hr>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</body>
@endsection
