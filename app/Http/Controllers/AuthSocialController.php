<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite ;
use App\SocialAccount ; 
use App\SocialFacebookAccountService ; 

class AuthSocialController extends Controller {	

	public function handle_provider(){
		$social_user = Socialite::driver($provider)->fields([
			'name', 'email'
		])->user();

			//Now we make the logic
			if (Auth::check()) {  //if the user is logged in
			$userID = Auth::user()->id; //then we get the user ID
			$user = User::where('id', $userID)->first(); //Prepare the model for update
			//And finally we just start to update each field in DB (you need to create this fields)
			$user->fb_email = $social_user->email;
			$user->avatar = $social_user->avatar;
			$user->fb_id = $social_user->id;
			$user->save();

			return $this->authAndRedirect($user); // This is to redirect the user 
		}
	} 
		/*
		from codetube code
		https://www.youtube.com/watch?v=Uy8pwTPVJyg
		*/
		public function redirect_to_provider($provider){
			return Socialite::driver($provider)->redirect();
		}
/*
Handling Provider Callback features..
*/


public function redirect($provider)
{ 
	return Socialite::driver($provider)->redirect();
}

/*callback provider*/	
public function handle_provider_callback(SocialFacebookAccountService $provider){
	$user = $service->createOrGetUser(Socialite::driver('facebook')->user());
	auth()->login($user);
	return redirect()->to('/');
}


public function handleProviderCallback($provider)
{
    // First we are going to get the user data from facebook
	$social_user = Socialite::driver($provider)->fields([
		'name', 'email'
	])->user();

		// Now we make the logic	
if (Auth::check()) {  //if the user is logged in
    $userID = Auth::user()->id; //then we get the user ID
	    $user = User::where('id', $userID)->first(); //Prepare the model for update

//And finally we just start to update each field in DB (you need to create this fields)
	    $user->fb_email = $social_user->email;
	    $user->avatar = $social_user->avatar;
	    $user->fb_id = $social_user->id;
	    $user->save();

    return $this->authAndRedirect($user); // This is to redirect the user 
}

}


/*Logging thru fb*/
public function logThruFb()
{
	return view('auth.social.facebook');
}

public function findOrCreateUser($providerUser, $provider)
{
	$account = SocialAccount::whereProviderName($provider)
	->whereProviderId($providerUser->getId())
	->first();

	if ($account) {
		return $account->user;
	} else {
		$user = User::whereEmail($providerUser->getEmail())->first();

		if (! $user) {
			$user = User::create([
				'email' => $providerUser->getEmail(),
				'name'  => $providerUser->getName(),
			]);
		}

		$user->social_accounts()->create([
			'provider_id'   => $providerUser->getId(),
			'provider_name' => $provider,
		]);

		return $user;
	}
}


/*Facebook login..*/
public function facebookLogin()
{
			// dd(request()->all());
	return Socialite::driver('github')->redirect();
}
}
