@extends("layouts.template")
@section("title")
Foodseason - Profile
@endsection
@section("body")
  <body class="profile-body">
        @include('partials.header')
    <div class="container">
    <div class="page-header header-filter" data-parallax="true"></div>
  <div class="main main-raised">
  <div class="profile-content">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                   <div class="profile">
                        <div class="avatar center">
                            <img src="https://images.unsplash.com/photo-1525315526278-e96d97c67c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-raised rounded-circle img-fluid" >
                        </div>
                        <div class="name">
                            <h3 class="title text-center">  {{ Auth::user()->username }}</h3>
                        </div>
                    </div>
                </div>
              </div>
              <div class="description text-center">
                  <p>Biografia </p>
                  <li class="nav-item">
                    <a href="editprofile" class="btn btn-light"> <i class="fas fa-user-edit"></i> Editar perfil </a>
                    <a href="recipe" class="btn btn-light"> <i class="fab fa-nutritionix"></i> Nueva receta </a>
                  </li>
              </div>
              <br>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
                      <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                <i class="fas fa-book"></i> Mis recetas
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="favrecipes" role="tab" data-toggle="tab">
                              <i class="far fa-heart"></i>
                                  Recetas favoritas
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="following" role="tab" data-toggle="tab">
                                <i class="fas fa-users"></i>
                                  Seguidos
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="followers" role="tab" data-toggle="tab">
                                <i class="fas fa-user-friends"></i>
                                  Seguidores
                              </a>
                          </li>

                        </ul>
                      </div>
          </div>
          </div>
          <div class="container">
      			<div class="row">
      				<!-- column-8 -->
      				<div class="col-12 col-md-8">
      					<article class="big-recipe">
      						<h2 class="recipe-title">Sopa de coliflor</h2>
      						<img src="https://images.unsplash.com/reserve/oMRKkMc4RSq7N91OZl0O_IMG_8309.jpg?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="imagen de la noticia" class="img-with-border">
      						<h3>Sopa de coliflor. Para chuparse los dedos!</h3>
      						<p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue.</p>
      						<a href="#" class="special-link">Quiero saber más</a>
      						<hr>
      					</article>

      				</div>
      				<!-- /column-8 -->

      				<!-- column-4 -->
      				<div class="col-12 col-md-4">
      					<article class="small-recipe">
                  <h2 class="recipe-title" >Budin de naranja, y chocolate!</h2>
                  <img src="https://images.unsplash.com/photo-1457666134378-6b77915bd5f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="imagen de la noticia" class="img-with-border">
                  <h3>Premiada como la mejor receta 2019!</h3>
                  <p>Phasellus laoreet massa id j congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in tristique.</p>
                  <a href="#" class="special-link">Quiero saber más</a>
                  <hr>
      					</article>

      				</div>
      				<!-- /column-4 -->
      			</div>
      		</div>

        </div>
  </body>
</html>
  @endsection
