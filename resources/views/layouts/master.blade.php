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
	@yield('head-scripts')

	<script>
	// FB.getLoginStatus(function(response){
	// 	status_change_callback(response);
	// });

	// function status_change_callback(response){
	// 	if ( response.status === "connected"){
	// 		console.log("Logged in & authenticated");
	// 	}
	// 	else {
	// 		console.log("not authenticated");
	// 	}
	// }

</script>

</head>	
<body class="bg-white text-justify">
	<div id="app">

		{{-- if he's logged on site.. then pass the logged user credentials --}}
		@auth
		<app-nav :user="{{ auth()->user() }}"></app-nav>
		@endauth

		@yield('content')
	</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script data-turbolinks-suppress-warning src="{{ mix('js/app.js') }}" data-turbolinks-track="true"></script>
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

{{-- 
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=637464850090671&autoLogAppEvents=1"></script> 

<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>

--}}