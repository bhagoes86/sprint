
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
				<div class="col-xs-3 active-step">
					<div class="arrow-right"></div>
					<span>UPLOAD</span>
					<div class="arrow-right" id="end-step"></div>
				</div>
				<div class="col-xs-3 ">
					<div class="arrow-right"></div>
					<span>KONFIRMASI</span>
					<div class="arrow-right" id="end-step"></div>
				</div>
				<div class="col-xs-3 ">
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
			<div class="box-login">
				<form action="" class="form-horizontal">
					<div class="form-group">
						<label for="name">File</label>
						<input type="file" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="lokasi">Lokasi Pengambilan</label>
						{!! Form::select( "lokasi", array('BETA - FST UNAIR'), null,  array('class' => 'form-control', 'id'=>'lokasi') ) !!}
					</div>

					<div class="form-group">
						<label for="handphone">Jenis Print</label>
						<div class="row">
							<div class="col-sm-6">
								<div class="radio">
									<label class="btn btn-default" style="font-size: 22px; line-height: 24px; margin: 0 0 12px; padding: 20px; font-weight: 100; padding-right: 30px; padding-left: 30px; width: 100%;">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Print Hitam Putih
									</label>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="radio">
									<label class="btn btn-default" style="font-size: 22px; line-height: 24px; margin: 0 0 12px; padding: 20px; font-weight: 100; padding-right: 30px; padding-left: 30px; width: 100%;">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Print Berwarna
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="lokasi">Jam Ambil</label>
						<div class="row">
							<div class="col-md-4">
								<select name="lokasi" id="lokasi" class="form-control">
									<option value="0">-- Jam --</option>
									<option value="1">01</option>
								</select>
							</div>
							<div class="col-md-4">
								<select name="lokasi" id="lokasi" class="form-control">
									<option value="0">-- Menit --</option>
									<option value="1">05</option>
									ul>li.item$*5
								</select>
							</div>
							<div class="col-md-4">
								<select name="lokasi" id="lokasi" class="form-control">
									<option value="0">-- Hari --</option>
									<option value="1">Hari ini</option>
									<option value="2">1 Hari lagi</option>
									<option value="2">2 Hari lagi</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="handphone">Keterangan</label>
						<textarea name="" id="" cols="32" rows="10" class="form-control" placeholder="beri penjelasan halaman yang akan di print" style="height: 150px;"></textarea>
					</div>
					<div class="form-group div-btn-login">
						<button class="btn btn-orange btn-lg btn-block">UPLOAD</button>
					</div>
				</form>
			</div>
			<br><br>
		</div>
	</div>
</div>

@include('partials.footer')

@stop
