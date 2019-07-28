<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Food season  Editar perfil</title>
    @extends("layouts.template")
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  @include('\partials\header')
  @section("title")
  Foodseason - Profile
  @endsection
  @section("body")
  <body class="editprofile-body">
<div class="container editprofile">
<div class="row">
  <div class="col-xs-12 col-sm-9">
    <form class="form-horizontal">
        <div class="panel panel-default">
          <div class="panel-body text-center">
           <img src="https://images.unsplash.com/photo-1430931071372-38127bd472b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-circle profile-avatar" alt="User avatar">
          </div>
        </div>
      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Cuenta</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nombre de usuario</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Biografia</label>
            <div class="col-sm-10">
              <textarea rows="3" class="form-control"></textarea>
=======
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
      <div class="col-12">
            <div class="text-center">
              <img src="img\profiledefault.png" class="avatar-editprofile" alt="avatar" style="width:100px; height:100px; border-radius:50%;">
                <br>
              <div class="form-group">
                 @csrf
                <br>
                <br>
              <label for="">{{ __('Subir foto de perfil') }}</label>
              <input name="profilePicture" type="file" value="">
             </div>
            </div>
<br>
<br>
            <div class="formulario">
           <form action="editprofile.php" method="post" class="form-editprofile" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
               <label for="username"><h4>Tu nombre de usuario es: {{Auth::user()->username}}</h4></label>
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
>>>>>>> eff28c8544d2f2dafbd4af84cb73f2dffbc15680
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Informacion</h4>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pais</label>
          <div class="col-sm-10">
            <select class="form-control">
              <option selected="">Elegir pais</option>
              <option>Argentina</option>
              <option>Canada</option>
              <option>Italia</option>
              <option>Estonia</option>
              <option>Francia</option>
            </select>
          </div>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Numero de telefono</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control">
            </div>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
        <h4 class="panel-title">Seguridad</h4>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Contraseña actual</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Nueva contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Confirmar contraseña</label>
            <div class="col-sm-10">
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <div class="checkbox">
                <input type="checkbox" id="checkbox_1">
                <label for="checkbox_1">Deseo que mi cuenta sea publica</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <button type="submit" class="btn btn-danger" style="background-color: #e24e42; color:white">Submit</button>
              <button type="reset" class="btn btn-warning" style="background-color: #E9B000; color:white">Cancel</button>
            </div>
          </div>
        </div>
      </div>
<<<<<<< HEAD
    </form>
  </div>
</div>
</div>
  </body>
  @endsection
</html>
=======
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
>>>>>>> eff28c8544d2f2dafbd4af84cb73f2dffbc15680
