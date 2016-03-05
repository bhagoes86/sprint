

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
					<div class="col-xs-3 active-step">
						<div class="arrow-right"></div>
						<span>AMBIL</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
					<div class="col-xs-3 ">
						<div class="arrow-right"></div>
						<span>BAYAR</span>
						<div class="arrow-right" id="end-step"></div>
					</div>
				</div>

				<div class="box-login box-konfirmasi">
					<br>
					<h3><i class="fa fa-check" id="check-fa"></i> Selamat!</h3>
					<hr>
					<p>Order anda telah selesai dikerjakan. Berikut detail order anda.</p>
					<br>
					<form action="" class="form-horizontal form-ambil">
						<div class="form-group">
							<label for="no_print">Kode Print</label>
							<input type="text" id="no_print" name="no_print" class="form-control" disabled value="{{ $print['code'] }}">
						</div>
						<div class="form-group">
							<label for="no_print">Lokasi Ambil</label>
							<input type="text" id="no_print" name="no_print" class="form-control" disabled value="{{ $print->place['name_place'] }}">
						</div>
						<div class="form-group">
							<label for="no_print">Biaya</label>
							<input type="text" id="no_print" name="no_print" class="form-control" disabled value="Rp. {{ $print['money_spend'] }},-">
						</div>
					</form>
					<p>Silahkan mengambi order print anda dengan menyebutkan kode print di lokasi pengambilan.</p>
				</div>

				<br><br>

			</div>
		</div>
	</div>

@include('partials.footer')

@stop
