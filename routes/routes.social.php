<?php

Route::get('/log/facebook',"AuthController@logThruFb")->name("facebookLoginForm");
Route::post('/log/facebook',"AuthController@facebookLogin")->name("facebookLogin");
Route::get('/log/google',"AuthController@logGooglAds")->name("googleLoginForm");
Route::post('/log/google',"AuthController@googleLogin")->name("googleLogin");

Route::get('login/github', 'AuthController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');