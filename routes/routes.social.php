<?php

// Route::get('/login/facebook',"AuthSocialController@logThruFb")->name("auth.facebook");
// Route::get('/login/facebook/callback ',"AuthSocialController@redirect_to_facebook")->name("auth.facebook.callback");
// Route::post('/log/facebook',"AuthController@facebookLogin")->name("auth.facebook.login");


Route::get('login/{provider}', 'AuthSocialController@redirect_to_provider')->name('auth.facebook');
Route::get('login/{provider}/callback', 'AuthSocialController@handle_provider_callback');


// Route::get('login/github', 'AuthController@redirectToProvider');
// Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');