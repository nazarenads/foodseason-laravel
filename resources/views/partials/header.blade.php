
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="{{ route('home') }}"><h1><i class="fas fa-carrot"></i> Food Season</h1></a><br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color">
      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('faqs') }}">FAQ's</a>
            </li>
              @guest
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('¿No tenes cuenta? ¡Registrate!') }}</a>
                </li>
            @endif
        @else

        <li class="nav-item active">
          <a class="nav-link" href="feed"> Inicio </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="profile"> Mi perfil</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @if (auth()->user()->profile_image)
              <img src="storage/profilePictures/{{auth()->user()->profile_image}}" style="width: 40px; height: 40px; border-radius: 50%;">
            @else
              <img src="img/profiledefault.png" style="width: 40px; height: 40px; border-radius: 50%;">
            @endif
            {{ Auth::user()->username }} <span class="caret"></span>
          </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('editprofile') }}"><i class="fas fa-user-edit"></i>  {{ __('Editar perfil') }}</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                      {{ __('Cerrar sesión') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>

      @endguest
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar recetas" aria-label="Search">
        <button class="btn btn-warning my-2 my-sm-0" style="background-color: #E9B000; color:white"  type="submit">Buscar</button>
      </form>
      </div>
</nav>

</header>
