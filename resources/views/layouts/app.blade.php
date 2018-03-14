<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trans Property Admin</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="row">
		<div class="col-md-2">
			@include('inc.sidebar')
		</div>
		<div class="col-md-10">
			@yield('content')
		</div>
	</div>

	<footer id="footer" class="footer fixed-bottom">
		Trans Property System (TROPYS) &copy; C06 <br>
		PT. Mega Capital Sekuritas
	</footer>

	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-sidebar.js')}}"></script>

</body>
</html>