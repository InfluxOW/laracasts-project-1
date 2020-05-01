<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('tweets', 'TweetsController')->only('store', 'index');
Route::resource('profiles', 'ProfilesController')->only('show')->parameters([
    'profiles' => 'user:name'
]);
Route::resource('profiles.follow', 'FollowsController')->only('store')->parameters([
    'profiles' => 'user:name'
]);
