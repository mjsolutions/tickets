<ul id="user_options" class="dropdown-content">
  <li><a href="#!">Ver Perfil</a></li>
  <li><a href="#!">Otro</a></li>
  <li class="divider"></li>
  <li><a href="">Salir</a></li>
</ul>

<div class="navbar-fixed">
  <nav class="transparent-header">
    <div class="nav-wrapper">
      <div class="container">
        <a href="#home" class="brand-logo mt-5 page-scroll"><img class="responsive-img" width="150px" style="height:90px;" src="{{asset('img/logotipo-negro-tipo2.svg')}}"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
        <li><a class="menu page-scroll" href="#eventos">Eventos</a></li>
          <li><a class="menu" href="#">Contacto</a></li>
          <li><a class="menu" href="#">Ayuda</a></li>
          {{-- <li><a class="menu" href="">Mi cuenta</a></li> --}}
          <li><a class="menu dropdown-button" href="#!" data-activates="user_options">Arquimides<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
      <ul class="center-align side-nav" id="mobile-demo">
        <div class="row mb-0">
          <div class="col s10 col-center mt-30">
            <a href="">
              <img class="responsive-img" src="{{asset('img/Logo_Negro.svg')}}">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col s8 col-center divider"></div>
        </div>
        <li><a href="">Eventos</a></li>
        <li><a href="">Contacto</a></li>
        <li><a href="">Ayuda</a></li>
        <li><a href="">Mi cuenta</a></li>
      </ul>
    </div>
  </nav>
</div>