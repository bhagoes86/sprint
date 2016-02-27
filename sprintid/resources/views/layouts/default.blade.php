<!DOCTYPE html>
<html>
<head>
	<title>.: SPRINT :.</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Speed Printing - Teknologi baru ngeprint tanpa antri">
    <meta name="author" content="Sprint ID">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="http://res.cloudinary.com/timdonat/image/upload/c_thumb,w_25/v1456559153/logo_sprint_hn3tbp.png" type="image/x-icon">
    
    <!-- Sweet alert -->
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" type="text" href="{{ asset('css/sweetalert.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    @yield('head')
</head>
<body class="bg-all-bootstrap">
	@yield('content')

	@yield('script')
</body>
</html>
