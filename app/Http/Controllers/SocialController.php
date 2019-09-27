<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite ; 
class SocialController extends Controller
{	

	public function redirect($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	public function callback($provider)
	{
		$getInfo = Socialite::driver($provider)->user(); 
		$user = $this->createUser($getInfo,$provider); 
		auth()->login($user); 
		return redirect()->to('/home');
	}

	function createUser($getInfo,$provider){
		$user = User::where('provider_id', $getInfo->id)->first();
		if (!$user) {
			$user = User::create([
				'name'     => $getInfo->name,
				'email'    => $getInfo->email,
				'provider' => $provider,
				'provider_id' => $getInfo->id
			]);
		}
		return $user;
	}


	public function handleProviderCallback($provider)
	{
	    // First we are going to get the user data from facebook
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


}
