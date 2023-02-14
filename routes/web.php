<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
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

// URL → http://formulario.test/

Route::get('/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('welcome');
});

//
Route::resource('post', PostController::class);


