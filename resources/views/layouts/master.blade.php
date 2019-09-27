<!DOCTYPE html>
<html>
<head>
	<title>Ad Manager | @yield('title')</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('css/stepper.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	@routes
	<script>
		@include('_partials.stubs.global-vars')
	</script>
</head>
<body class="bg-white text-justify">
	<div id="app">

{{-- if he's logged on .. --}}
		@auth
			<app-nav :user="{{ auth()->user() }}"></app-nav>
		@endauth

		@yield('content')
	</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script data-turbolinks-suppress-warning src="{{ mix('js/app.js') }}">
</script>
<script>	
	document.addEventListener('DOMContentLoaded', function () {
		var stepper = new Stepper(document.querySelector('.bs-stepper'))
	});

	$(document).on('turbolinks:load',function() {
//infinite_scroll()	
console.log('turbolinks:load fired');
});
</script>
</body>
</html>