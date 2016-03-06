@extends('layouts.default')

@section('content')

@include('partials.header-initial', array('login'=>'active'))

@include('sweet::alert')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="title-box">LOGIN TO SPRINT</h1>
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Sorry</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="box-login" style="padding-bottom: 10px;">
				{!! Form::open(array('url' => '/auth/login','class' => 'form-horizontal' )) !!}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label for="email">Password</label>
					<input type="password" id="password" name="password" class="form-control">
				</div>
				<div class="form-group div-btn-login">
					<button class="btn btn-orange btn-lg btn-block" type="submit">LOGIN</button>
				</div>
				<div class="form-group" style="margin-bottom: 0;margin-top: 15px;">
					<div class="col-md-6 col-md-offset-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Remember Me
							</label>
						</div>
					</div>
				</div>
				{!! Form::close() !!}
			</div>

			<div class="text-center box-login-footer ">
				<a href="{{ url('/auth/forget')  }}">Lupa password Anda?</a>
				<p>Belum punya akun sprint? <a href="{{ url('/auth/register') }}">Sign Up!</a></p>
			</div>

		</div>
	</div>
</div>

@include('partials.footer')


@stop

