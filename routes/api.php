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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/test/test', 'App\Http\Controllers\Test\TestController@index');
Route::any('/order/ship', 'App\Http\Controllers\OrderController@ship');
Route::any('/login', 'App\Http\Controllers\LoginController@index');
Route::any('/login', 'App\Http\Controllers\LoginController@index');
Route::any('/logout', 'App\Http\Controllers\LogoutController@index');
