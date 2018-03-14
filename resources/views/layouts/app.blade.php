<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trans Property Admin</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/custom-scrollbar.css')}}">
</head>
<body>
		@include('inc.navbar')
			@include('inc.sidebar')
			<div id="content" class="active">
				@yield('content')
			</div>
		<footer id="footer" class="footer fixed-bottom">
			Trans Property System (TROPYS) &copy; C06 <br>
			PT. Mega Capital Sekuritas
		</footer>
		<div class="overlay"></div>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-sidebar.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom-scrollbar.js')}}"></script>
</body>
</html>