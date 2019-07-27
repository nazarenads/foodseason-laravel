
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand" href="home.php"><h1><i class="fas fa-carrot"></i> Food Season</h1></a><br>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color">
      <ul class="navbar-nav mr-auto">

        @guest
            <li class="nav-item active">
              <a class="nav-link" href="">FAQ's</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
            @endif
        @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href=""><i class="fas fa-user-edit"></i></a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
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
