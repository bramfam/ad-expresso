<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('index');
})->name('index');



/*
these are components...
*/
Route::get('/components', function () {
	return view('components');
});


/*only for the ones who are logged on*/
Route::group(['middleware' => [ 'auth','verified' ]], function (){
// view a users tags.. 

// go visit a campaign..
	Route::resource('campaign','CampaignController');

	Route::get("tags/user/{user}","CampaignController@tags")->name("campaign.user.tags");


	/*only verified users can access this*/
	Route::get('profiles/user/{user}',"ProfilesController@show_profile")->name('users.profile');
});

/*Auto login*/
Route::get('/auto-log',function(){
	auth()->loginUsingId(\App\User::inRandomOrder()->first()->id) ; 
	return redirect()->route('campaign.index');
});

Route::get("auth/user",function(){
	return auth()->user(); 
});


Route::get('/home', 'HomeController@index')->name('home');

// Route::get("api/v1/campaigns","CampaignController@");


// from appzcoder/laravel-admin -> package frm composer
/*Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
'index', 'show', 'destroy'
]);

Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
*/

/*for facebook and google ads login*/
include 'routes.social.php';




// passing verify means we use email verification
Route::get('logout',"AuthController@logout");
Auth::routes(['verify' => true]);

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::post('login','AuthController@login')->name('postLogin');