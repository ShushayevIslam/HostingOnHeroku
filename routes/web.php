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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/i','App\Http\Controllers\ClientController@get_inf');

Route::get('/{lang}',function($lang){
	App::setlocale($lang);
	return view('home');
});


//Route::post('/getmsg','AjaxController@index');

Route::post('localhost/project1/public/contact/submit','App\Http\Controllers\ClientController@save');

//Route::get('/send',[MailController::class,"send"]);