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

Route::get('/',['uses' => 'UserController@getlogin','as' =>'user.login']);

Route::get('/register', function() {
	return view('register');
});
Route::post('/register',['uses'=>'UserController@postRegister', 'as'=>'user.register']);

Route::post('/',['uses' => 'UserController@postLogin', 'as'=>'user.login']);

Route::get('/home',['uses' => 'ClubController@getHome','as' =>'club.home']);

Route::get('/profile',['uses'=>'UserController@getprofile','as'=>'user.profile']);

Route::get('/logout',['uses'=>'UserController@getlogout', 'as'=>'user.logout']);

Route::get('/club/{c_name}',['uses' =>'ClubController@getclub', 'as' => 'club.club']);

Route::get('/events',['uses' => 'ClubController@getevents','as' => 'club.events']);

Route::get('/eventregister/{id}',['uses' =>'ClubController@geteventregister','as' => 'club.register']);

Route::get('/adminhome',['uses' => 'ClubController@getadminhome','as' => 'club.adminhome']);

Route::get('/addmembers',['uses' => 'ClubController@addmembers','as' => 'club.addmembers']);

Route::post('/insertmembers',['uses' => 'ClubController@insertmember','as' => 'club.insertmember']);

Route::get('/members/{name}',['uses' => 'ClubController@members','as' => 'club.members']);

Route::get('/filterevents/{name}',['uses' => 'ClubController@filterevents', 'as' => 'club.filterevents']);

Route::get('/addevents',['uses' => 'ClubController@addevents','as' => 'club.addevents']);

Route::post('/addevents',['uses' => 'ClubController@createevents']);