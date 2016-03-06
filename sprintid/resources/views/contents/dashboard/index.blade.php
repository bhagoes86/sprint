

@extends('layouts.default')

@section('head')
{{--
	<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
	<!-- TAMBAHAN TABLE -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tabel').DataTable();
			$('#tabel-file').DataTable();
		} );
	</script>
--}}
@stop

@section('content')

@include('partials.header-was-login', array('dashboard' => 'active'))

	<div class="container">
		<h1 class="title-box">DASHBOARD</h1>
		<div class="row">
			<div class="col-md-4">
				<div class="div-sidebar">
					<div id="div-saldo">
						Saldo
						<h1>Rp. <span id="nominal-saldo">{{ $user_data['deposit'] }}</span>,-</h1>
					</div>
					<br>
					<div class="table-responsive" id="div-profil">
						Profil Anda
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td width="40%">Nama</td>
									<td>{{ $user_data['name'] }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>{{ $user_data['email'] }}<m</td>
								</tr>
								<tr>
									<td>No Hp</td>
									<td>{{ $user_data['no_hp'] }}<</td>
								</tr>
								<tr>
									<td>Password</td>
									<td><a href="#">ubah password</a></td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>

			<div class="col-md-8">
				<div class="div-area">
					<h3>Histori Print</h3>
					<hr>
					<table class="table table-bordered" id="tabel" style="font-size: 15px;">
						<thead>
							<tr>
								<th width="10%">No</th>
								<th>Nama File</th>
								<th>Kode Print</th>
								<th>Biaya</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@forelse( $printList as $key => $rowPrint )
							<tr>
								<td>{{ $key+1 }}</td>
								<td>{{ $rowPrint['name_file'] }}</td>
								<td>{{ $rowPrint['code'] }}</td>
								<td>{{ $rowPrint['money_spend'] }},-</td>
								<td>-</td>
								<td><a href="{{ url('print/'.$rowPrint['code']) }}" class="btn btn-success"><i class="fa fa-play"></i> 	Next Step</a> <a href="{{ url('print/'.$rowPrint['code']) }}" class="btn btn-info"><i class="fa fa-download"></i> 	Download</a> </td>
							</tr>
							@empty
							<tr>
								<td colspan="6" class="text-center active">No data</td>
							</tr>
							@endforelse
						</tbody>
					</table>
					<br>
				{{--	<h3>File</h3>
					<hr>
					<table class="table table-bordered" id="tabel-file" style="font-size: 15px;">
						<thead>
							<tr>
								<td width="10%">No</td>
								<td>Nama File</td>
								<td>Extensi</td>
								<td>Aksi</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Makalah PKM</td>
								<td>.pdf</td>
								<td><button class="btn btn-success"><i class="fa fa-cloud-download"></i> Download</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Makalah LPJ HIMATIKA</td>
								<td>.doc</td>
								<td><button class="btn btn-success"><i class="fa fa-cloud-download"></i> Download</button></td>
							</tr>
						</tbody>
					</table> --}}
				</div>
			</div>
		</div>
	</div>
@include('partials.footer')

@stop
