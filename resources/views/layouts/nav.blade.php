<ul id="user_options" class="dropdown-content">
  <li><a href="{{ route('cliente.perfil') }}" class="black-text">Perfil</a></li>
  <li><a href="{{ route('cliente.eventos') }}" class="black-text">Mis eventos</a></li>
  <li class="divider"></li>
  <li>
    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
    
  </li>
</ul>

<div class="navbar-fixed">
  <nav class="white">
    <div class="nav-wrapper container">
      <a href="{{ route('index') }}" class="brand-logo offset-m5 s2 offset-s5 mt-5 page-scroll">
        <img class="responsive-img" src="{{asset('img/logotipo-nuevo-negro.svg')}}">
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="menu" href="{{ route('index') }}">Inicio</a></li>
        <li><a class="menu" href="{{ route('contacto') }}">Contacto</a></li>
        <li><a class="menu" href="#">Ayuda</a></li>
        {{-- <li><a class="menu" href="">Mi cuenta</a></li> --}}
         @if (Auth::guest())
          <li><a class="menu modal-login-open" href="#modal-login">Ingresar</a></li>            
         @else
          <li><a class="menu dropdown-button user-logged" href="#!" data-activates="user_options">Mi cuenta <i class="material-icons right ml-0" style="margin-top: -5px;">arrow_drop_down</i></a></li>
         @endif
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="row">
          <div class="col s4 col-center mt-30">
            
              <img class="responsive-img" src="{{asset('img/logotipo-nuevo-negro.svg')}}">
            
          </div>
        </li>
        <div class="row">
          <div class="col s8 col-center divider"></div>
        </div>
        <li class="pl-30"><a href="{{ route('index') }}">Inicio</a></li>
        <li class="pl-30"><a href="{{ route('contacto') }}">Contacto</a></li>
        <li class="pl-30"><a href="">Ayuda</a></li>
        <li class="pl-30"><div class="col s8 col-center divider"></div></li>
         @if (Auth::guest())
        <li class="pl-30"><a class="menu modal-login-open" href="#modal-login">Ingresar</a></li>            
        @else
        <li class="pl-30">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header">Mi cuenta <i class="material-icons right ml-0">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="{{ route('cliente.perfil') }}">Perfil</a>
                  </li>
                  <li>
                    <a href="{{ route('cliente.eventos') }}">Mis eventos</a>
                  </li>
                  <li>
                    <div class="divider"></div>
                  </li>
                  <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </nav>
</div>