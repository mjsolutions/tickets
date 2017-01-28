<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('title','Sistema de reservaciones') | Bolemático</title>
	@include('admin.partials.head')
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
	@include('admin.partials.nav')
	<div class="page-container">
		@yield('side-menu')
		<a href="javascript:;" class="page-quick-sidebar-toggler"> <i class="icon-login"></i> </a>
		<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
			
		</div>
		<div class="page-content-wrapper">
			<div class="page-content">
				<div style="padding: 0 10px;">
					<div class="portlet box light">
						<div class="portlet-title">
							@include('flash::message')
							@yield('head-title')
						</div>
						<div class="portlet-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Botón para agregar nueva reservación --}}
	<div class="fixed-action-btn">
		<a class="btn-floating btn-large red waves-effect waves-light" data-toggle="modal" data-target="#modal">
			<i class="material-icons">add</i>
		</a>
	</div>
	@include('admin.partials.footer')
	@include('admin.partials.scripts')
</body>
</html>