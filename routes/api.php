<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route API
Route::get('/test', function(){
    return response()->json([
        'clients' => ['Pierfrancesco', 'Calogero', 'Luca'],
        'lorem' => 'ipsum',
    ]);
});

// API Endpoint

Route::namespace('Api')->group(function() {
    // Post Archive
    Route::get('/posts', 'PostController@index');
    // Post Detail
    Route::get('/posts/{slug}', 'PostController@show');
});

