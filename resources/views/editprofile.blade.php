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
    </form>
  </div>
</div>
  </body>
  @endsection
</html>
