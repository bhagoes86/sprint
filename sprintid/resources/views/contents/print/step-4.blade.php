

@extends('layouts.default')

@section('head')
@stop

@section('content')

@include('partials.header-was-login', array('print' => 'active'))


	<div class="container">
		<h1 class="title-box">PRINT IN SPRINT</h1>
		<div class="row">

			<div class="col-md-8 col-md-offset-2">

				<div class="row-fluid step-custom hidden-sm hidden-xs" style="margin-bottom: 100px;">
					<div class="col-xs-3">
						<div class="arrow-right"></div>
						<span>UPLOAD</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
					<div class="col-xs-3">
						<div class="arrow-right"></div>
						<span>KONFIRMASI</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
					<div class="col-xs-3">
						<div class="arrow-right"></div>
						<span>AMBIL</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
					<div class="col-xs-3 active-step">
						<div class="arrow-right"></div>
						<span>BAYAR</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
				</div>

				<div class="box-login box-konfirmasi">
					<br>
					<h3><i class="fa fa-check" id="check-fa"></i> Order telah selesai!</h3>
					<hr>
					<p>Terima kasih order anda telah selesai. Silahkan tekan menu dashboard untuk melihat histori print anda. Jika ada saran dan masukkan silahkan klik </p>
					<br>
					<div class="row">
						<div class="col-md-6"><a href="{{ url('dashboard') }}" class="btn btn-orange btn-lg btn-block">Dashboard</a></div>
						<div class="col-md-6"><a href="{{ url('kritik-saran') }}" class="btn btn-orange btn-lg btn-block">Kirim Kritik & Saran</a></div>
					</div>
					<br>
				</div>

				<br><br>

			</div>
		</div>
	</div>

@include('partials.footer')

@stop
