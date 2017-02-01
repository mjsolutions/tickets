<ul id="user_options" class="dropdown-content">
  {{-- <li><a href="#!">Ver Perfil</a></li> --}}
  {{-- <li><a href="#!">Otro</a></li> --}}
  {{-- <li class="divider"></li> --}}
  <li>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
</ul>

<div class="navbar-fixed">
  <nav class="transparent-header">
    <div class="nav-wrapper">
      <div class="container row">
        <a href="{{ route('home') }}#home" class="brand-logo col s1 mt-10 page-scroll">
          <img class="responsive-img" src="{{asset('img/logotipo-negro-tipo2.svg')}}">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down mt-15">
        <li><a class="menu page-scroll" href="{{ route('home') }}#eventos">Eventos</a></li>
          <li><a class="menu" href="#">Contacto</a></li>
          <li><a class="menu" href="#">Ayuda</a></li>
          {{-- <li><a class="menu" href="">Mi cuenta</a></li> --}}
           @if (Auth::guest())
            <li><a class="menu" href="{{ url('/login') }}">Login</a></li>            
           @else
            <li><a class="menu dropdown-button" href="#!" data-activates="user_options">{{ Auth::user()->name }}<i class="material-icons right ml-0" style="margin-top: -5px;">arrow_drop_down</i></a></li>
           @endif
        </ul>
      </div>
      <ul class="center-align side-nav" id="mobile-demo">
        <div class="row mb-0">
          <div class="col s10 col-center mt-30">
            <a href="">
              <img class="responsive-img" src="{{asset('img/logotipo-negro-tipo2.svg')}}">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col s8 col-center divider"></div>
        </div>
        <li><a href="{{ route('home') }}#eventos">Eventos</a></li>
        <li><a href="">Contacto</a></li>
        <li><a href="">Ayuda</a></li>
        <li><a href="">Mi cuenta</a></li>
      </ul>
    </div>
  </nav>
</div>