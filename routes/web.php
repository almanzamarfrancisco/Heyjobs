<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/test', function(){
	return App\User::with('engagements')->get();
})->name('showProvidersLogin');

Route::get('/login_providers', 'Auth\ProvidersLoginController@showLoginForm')->name('showProvidersLogin');
Route::post('/login_providers', 'Auth\ProvidersLoginController@login')->name('loginProviders');
Route::post('/logout_providers', 'Auth\ProvidersLoginController@logout')->name('logout_providers');

Route::get('/home', 'UsersController@index')->name('home');
Route::get('/dashboard', 'UsersController@dashboard')->name('dashboard');
Route::get('/search', 'UsersController@search')->name('search');

Route::get('/home_providers', 'ProvidersController@index')->name('home_providers');
Route::get('/dashboard_providers', 'ProvidersController@dashboard')->name('dashboard_providers');
Route::get('/search_providers', 'ProvidersController@search')->name('search_providers');

Route::post('/new_post', 'PostController@newPost')->name('new_post');
