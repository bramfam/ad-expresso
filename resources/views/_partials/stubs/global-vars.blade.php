window.Ads = {!! json_encode([
	'csrfToken' => csrf_token(),
	'user' => Auth::user(),
	'signedIn' => Auth::check(),
]) !!}