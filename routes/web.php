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
Route::get('/search', 'UsersController@search')->name('search_view');
Route::post('/search', 'UsersController@searchProvider')->name('search_provider');
Route::get('/client_engagements', 'UsersController@engagements')->name('client_engagements');
Route::get('/show_provider', 'UsersController@showProvider')->name('show_provider');
Route::post('/request_contract', 'UsersController@requestContract')->name('request_contract');

Route::get('/home_providers', 'ProvidersController@index')->name('home_providers');
Route::get('/dashboard_providers', 'ProvidersController@dashboard')->name('dashboard_providers');
Route::get('/search_providers', 'ProvidersController@search')->name('search_providers');

Route::get('/engagements_dashboard', 'ProvidersController@engagementsDashboard')->name('engagements_dashboard');
Route::get('/change_engagement_state', 'ProvidersController@changeEngagementState')->name('change_engagement_state');
Route::post('/change_engagement_info', 'ProvidersController@changeEngagementInfo')->name('change_engagement_info');

Route::post('/new_post', 'PostController@newPost')->name('new_post');
