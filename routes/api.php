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

Route::get('comments','App\Http\Controllers\CommentController@index');

Route::get('comment/{id}','App\Http\Controllers\CommentController@show');

Route::post('comment','App\Http\Controllers\CommentController@store');


Route::put('comment','App\Http\Controllers\CommentController@store');

Route::delete('commentary/{id}','App\Http\Controllers\CommentController@destroy');

