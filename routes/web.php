<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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


//Route::get('/i','App\Http\Controllers\ClientController@get_inf');

Route::get('/',function(){
	return view('home');
});

Route::get('/{locale}','App\Http\Controllers\LocalizationController@index');


//Route::post('/getmsg','AjaxController@index');

Route::post('localhost/project1/public/contact/submit','App\Http\Controllers\ClientController@save');

Route::post('localhost/project1/public/comment','App\Http\Controllers\CommentController@store');

//Route::get('/send',[MailController::class,"send"]);