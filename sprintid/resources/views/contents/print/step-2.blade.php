

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
					<div class="col-xs-3 active-step">
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

				<div class="box-login box-konfirmasi">
					<h2>Konfirmasi</h2>
					<br>
					<p>Silahkan melakukan konfirmasi. Konfirmasi dapat dilakukan dengan cara sebagai berikut :</p>
					<ul>
						<li>Mengirim Chat ke Line@ Sprint dengan id <span class="number">@wqi1nsd</span>, atau </li>
						<li>Mengirim Pesan Singkat atau SMS ke nomor <span class="number">085732401129</span>, atau </li>
						<li>Mengirim Chat ke whatsapp dengan nomor <span class="number">085732401129</span> </li>
					</ul>
					<br>
					<p>dengan format isi pesan sebagai berikut </p>
					<blockquote><h3>{{ $print['code'] }} GOPRINT.ID</h3></blockquote>
					<p>Order anda akan dikerjakan / dieksekusi setelah anda mengirim konfirmasi tersebut kepada kami.</p>
				</div>

				<br><br>

			</div>
		</div>
	</div>

@include('partials.footer')

@stop
