window.Ads = {!! json_encode([
	'csrfToken' => csrf_token(),
	'user' => Auth::user(),
	'signedIn' => Auth::check(),
	'facebook_id' => env('FACEBOOK_APP_ID')
]) !!}

