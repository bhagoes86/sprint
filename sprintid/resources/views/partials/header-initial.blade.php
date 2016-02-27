	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#" style="padding: 0;">
					<img alt="Brand" src="http://res.cloudinary.com/timdonat/image/upload/c_scale,h_77/v1456559153/logo_sprint_hn3tbp.png">
					<a class="navbar-brand" href="#" style="color: #FFF;padding-left: 20px">Sprint ID</a>
				</a>
			</div>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li class="{{ $login or '' }}">
						<a href="{{ url('/auth/login') }}" class="btn-orange btn-header-right">LOGIN <span class="sr-only">(current)</span></a>
					</li>
					<li class="{{ $signup or '' }}">
						<a href="{{ url('/auth/register') }}" class="btn-orange btn-header-right">SIGN UP <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
