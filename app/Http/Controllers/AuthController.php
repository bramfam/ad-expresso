<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite ; 
use Auth ; 

class AuthController extends Controller
{

 function handleProvider(){
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


  public function redirectToProvider()
  {		
   return Socialite::driver('github')->redirect();
 }


 public function login(){
	// Validate the request. 
   $this->validate(request(), [
    'email' => 'required|string|email',
    'password' => 'required|string|min:5',
  ]);

   $pin = request()->get('email');
   $remember_me = request()->get('remember');
   
   $password = request()->get('password');

	// if (Auth::attempt([$field => $field,'password' => $password], $remember_me)){
   if (Auth::attempt(['email' => $pin ,'password' => $password])){
    return redirect()->route('campaign.index');
  }
  
  return redirect('login')->withErrors([
    'email' => 'No records were found on those input.'
  ])->withInput(request(['pin']));

}

public function logout(Request $request)
{
 Auth::guard()->logout();
 $request->session()->invalidate();
 return $this->loggedOut($request) ?: redirect('/home');
}

 /**
   * The user has logged out of the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return mixed
   */
 protected function loggedOut(Request $request)
 {
      //
 }



 /*Logging thru fb*/
 public function logThruFb()
 {
 	return view('auth.social.facebook');
 }

 /*Facebook login..*/
 function facebookLogin()
 {
	// dd(request()->all());
 	return Socialite::driver('github')->redirect();
 }


  /**
   * Obtain the user information from GitHub.
   *
   * @return \Illuminate\Http\Response
   */
  public function handleProviderCallback()
  {
  	$user = Socialite::driver('github')->user();
  }

}
