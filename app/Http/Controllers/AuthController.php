<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite ; 
use Auth ; 

class AuthController extends Controller
{


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


}
