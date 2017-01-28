<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li @if($active == 'reservaciones') class="nav-item start active open" @else class="nav-item "  @endif>
				<a href="{{ route('payment') }}" class="nav-link nav-toggle">
					<i class="icon-home"></i> <span class="title">Reservación</span> @if($active == 'reservaciones') <span class="selected"></span> @endif
				</a>
			</li>
			<li @if($active == 'usuarios') class="nav-item start active open" @else class="nav-item"  @endif>
				<a href="{{ route('users.index') }}" class="nav-link nav-toggle">
					<i class="icon-diamond"></i> <span class="title">Usuarios</span>
					@if($active == 'usuarios') <span class="selected"></span> @endif
				</a>
			</li>
			<li @if($active == 'reportes') class="nav-item start active open" @else class="nav-item"  @endif>
				<a href="#!" class="nav-link nav-toggle">
					<i class="icon-puzzle"></i> <span class="title">Reportes</span>
					@if($active == 'reportes') <span class="selected"></span> @endif
				</a>
			</li>
		</ul>
	</div>
</div>