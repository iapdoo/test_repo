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
    return view('welcome');
});

Auth::routes();
#users
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/adminpanel/users/changepassword', 'UsersController@updatePassword');
/*
 * admin route
 * */

Route::group(['middleware'=>[ 'web','admin']],function (){
    Route::get('/adminpanel', 'AdminController@index');
    Route::resource('/adminpanel/users', 'UsersController');
    Route::post('/adminpanel/users/{user_id}/changepassword', 'UsersController@updatePassword');
    Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');

    /*
     * sitsetting
     * */

    Route::get('/adminpanel/sitsetting','SitSettingController@index');
    Route::post('/adminpanel/sitsetting','SitSettingController@store');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/adminpanel/bu', 'BuController');
Route::get('/adminpanel/bu/{id}/delete','BuController@destroy');

Route::get('showallbulding','BuController@showallenable');
Route::get('forrent','BuController@forrent');
Route::get('forbay','BuController@forbay');
Route::get('type/{type}','BuController@fortype');
Route::post('/search','BuController@search');
