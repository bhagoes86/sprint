
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
				<div class="form-horizontal">
				{!! Form::open(['route'=>'print.step1', 'files'=>'true']) !!}
					<div class="form-group">
						<label for="url_file">File</label>
						<input type="file" id="url_file" name="url_file" class="form-control">
					</div>
					<div class="form-group">
						<label for="place_id">Lokasi Pengambilan</label>
						{!! Form::select( "place_id", $place, Input::old('lokasi'),  array('class' => 'form-control', 'id'=>'lokasi') ) !!}
					</div>

					<div class="form-group">
						<label for="type_print">Jenis Print</label>
						<div class="row">
							<div class="col-sm-6">
								<div class="radio">
									<label class="btn btn-default" style="font-size: 22px; line-height: 24px; margin: 0 0 12px; padding: 20px; font-weight: 100; padding-right: 30px; padding-left: 30px; width: 100%;">
										<input type="radio" name="type_print" id="type_print" value="1" checked>
										Print Hitam Putih
									</label>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="radio">
									<label class="btn btn-default" style="font-size: 22px; line-height: 24px; margin: 0 0 12px; padding: 20px; font-weight: 100; padding-right: 30px; padding-left: 30px; width: 100%;">
										<input type="radio" name="type_print" id="type_print" value="2">
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
								<select name="jam" id="jam" class="form-control">
									<option value="0">-- Jam --</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
								</select>
							</div>
							<div class="col-md-4">
								<select name="menit" id="menit" class="form-control">
									<option value="0">-- Menit --</option>
									<option value="00">00</option>
									<option value="05">05</option>
									<option value="10">10</option>
									<option value="15">15</option>
									<option value="20">20</option>
									<option value="25">25</option>
									<option value="30">30</option>
									<option value="35">35</option>
									<option value="40">40</option>
									<option value="45">45</option>
									<option value="50">50</option>
									<option value="55">55</option>
								</select>
							</div>
							<div class="col-md-4">
								<select name="hari" id="hari" class="form-control">
									<option value="0">-- Hari --</option>
									<option value="1">Hari ini</option>
									<option value="2">1 Hari lagi</option>
									<option value="3">2 Hari lagi</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="text_note">Keterangan</label>
						<textarea name="text_note" id="text_note" cols="32" rows="10" class="form-control" placeholder="beri penjelasan halaman yang akan di print" style="height: 150px;"></textarea>
					</div>
					<div class="form-group div-btn-login">
						<button class="btn btn-orange btn-lg btn-block" type="submit">UPLOAD</button>
					</div>
				{!! Form::close() !!}
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>

@include('partials.footer')

@stop
