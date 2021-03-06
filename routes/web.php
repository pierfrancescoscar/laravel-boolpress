<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Home
Route::get('/', function () {
    return view('guests.home');
});
// Routes authenticate
Auth::routes();

// Admin routes

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        // Admin homepage
        Route::get('/', 'HomeController@index')->name('home');

        // Post route
        Route::resource('/posts', 'PostController');

        // Category pages route
        Route::get('/categories/{$id}', 'CategoryController@show')->name('category');

    });

// Home front
Route::get('{any?}', function () {
    return view('guests.home');
})->where('any', '.*' );
