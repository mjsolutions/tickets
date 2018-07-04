<div class="collection mt-0">
	<a href="{{ route('cliente.perfil') }}" class="collection-item @if(str_contains(Route::getCurrentRoute()->getName(), 'cliente.perfil')) active @endif"><i class="fa fa-user"></i> Mis Datos</a>
	<a href="{{ route('cliente.eventos') }}" class="collection-item @if(str_contains(Route::getCurrentRoute()->getName(), 'cliente.eventos')) active @endif"><i class="fa fa-ticket"></i> Eventos</a>
</div>

<div class="col s12 center-align hide-on-small-only">
	<a href="{{ url('/logout') }}" class="btn waves-effect waves-light red darken-3" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
</div>