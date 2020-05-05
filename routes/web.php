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

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::resource('tweets', 'TweetsController')->only('store', 'index');
    Route::post('/tweets/{tweet}/like', 'TweetsController@like')->name('tweets.like');
    Route::post('/tweets/{tweet}/dislike', 'TweetsController@dislike')->name('tweets.dislike');

    // Route::post('/profiles/{user:username}/image-upload', 'UploadsController@store')->name('profiles.image-upload');
    Route::post('/upload', 'UploadsController@store')->name('upload');

    Route::resource('profiles', 'ProfilesController')->only('show', 'edit', 'update')->parameters([
        'profiles' => 'user:username'
    ]);

    Route::resource('profiles.follow', 'FollowsController')->only('store')->parameters([
        'profiles' => 'user:username'
    ]);

    Route::resource('explore', 'ExploreController')->only('index');
});

Auth::routes();
