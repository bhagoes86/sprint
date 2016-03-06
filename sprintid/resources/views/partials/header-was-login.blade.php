	<nav class="navbar navbar-default">
		<div class="container">			
			<div class="navbar-header">
				<a class="navbar-brand" href="#" style="padding: 0;">
					<img alt="Brand" src="http://res.cloudinary.com/timdonat/image/upload/c_scale,h_77/v1456559153/logo_sprint_hn3tbp.png">
					<a class="navbar-brand" href="{{ url('dashboard') }}" style="color: #FFF;padding-left: 20px">GOPRINT.ID</a>
				</a>
			</div>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li class="{{ $dashboard or '' }}">
						<a href="{{ url('dashboard') }}" class="btn-orange btn-header-right">DASHBOARD </a>
					</li>
					<li class="{{ $print or '' }}">
						<a href="{{ url('print') }}" class="btn-orange btn-header-right">PRINT </a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle btn-orange btn-header-right" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
