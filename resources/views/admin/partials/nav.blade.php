<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner ">
		<div class="page-logo">
		<a href="#!"> <img src="{{asset('images/logo-textobco.png')}}" alt="logo" class="logo-default" /> </a>
			<div class="menu-toggler sidebar-toggler">
			</div>
		</div>
		<a href="#!" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<div class="page-top">
			{{-- <form class="search-form search-form-expanded" action="" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Buscar reservación" name="query">
					<span class="input-group-btn">
						<a href="#!" class="btn submit">
							<i class="icon-magnifier"></i>
						</a>
					</span>
				</div>
			</form> --}}
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="icon-calendar"></i>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>
									Tienes <span class="bold">12 reservaciones</span> pendientes <a href="#!">Ver todas</a>
								</h3>
							</li>
						</ul>
					</li>
					<li class="dropdown dropdown-user">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<img alt="" class="img-circle" src="{{asset('img/avatar3_small.jpg')}}" />
							<span class="username username-hide-on-mobile"> Nick </span>
							<i class="fa fa-angle-down"></i> 
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#!"> <i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li>
								<a href="#!"> <i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<li class="dropdown dropdown-extended quick-sidebar-toggler">
						<span class="sr-only"></span> <i class="icon-logout"></i>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>