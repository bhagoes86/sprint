@extends('layouts.default')

@section('content')

@include('partials.header-initial', array('signup'=>'active'))
					
<div class="container">
	<h1 class="title-box">SIGNUP TO SPRINT</h1>
	<div class="row">
		<div class="col-md-8">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Sorry!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<div class="box-login">
				<form action="{{ url('/auth/register') }}" role="form" method="POST" class="form-horizontal"><input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="repassword">Re-password</label>
						<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
					</div>
					<div class="form-group">
						<label for="name">Nama</label>
						<input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<label for="handphone">Nomer Handphone</label>
						<input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
					</div>
					<div class="form-group div-btn-login">
						<button class="btn btn-orange btn-lg btn-block" type="submit">SIGN UP</button>
					</div>
				</form>
			</div>
			<br><br>
		</div>
		<div class="col-md-4">
			<div class="box-signup-right">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maiores, deleniti odit laudantium temporibus, voluptatibus quas eveniet itaque sunt id est minus eligendi obcaecati aperiam omnis, sint suscipit nihil commodi.</p>
				<br>
				<div class="step-signup">
					<div><i class="fa fa-cloud-upload fa-4x"></i></div> <span>Upload File Dokumen</span>
				</div>
				<div class="step-signup">
					<div><i class="fa fa-mobile-phone fa-4x"></i></div> <span>Kirim Konfirmasi</span>
				</div>
				<div class="step-signup">
					<div><i class="fa fa-hand-grab-o fa-4x"></i></div> <span>Ambil Dokumen</span>
				</div>
				<div class="step-signup">
					<div><i class="fa fa-money fa-4x"></i></div> <span>Bayar</span>
				</div>
			</div>
		</div>
	</div>
</div>

@include('partials.footer')

@stop