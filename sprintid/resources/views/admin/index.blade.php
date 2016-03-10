@extends('layouts.admin', ['sidebar' => $sidebar ])
@section('title','Dashboard')
@section('head')
<link rel="stylesheet" href="{{ asset('assets/lib/summernote/dist/summernote.css') }}">
<script src="{{ asset('assets/lib/summernote/dist/summernote.min.js') }}"></script>
@stop
@section('header')
<h1>
	Dashboard
	<small>Control Pane;</small>
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard Menu</a></li>
</ol>
@stop
@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-lg-5">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>10</h3>
						<p>New Orders Print</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-5">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>44</h3>

						<p>User Registrations</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
