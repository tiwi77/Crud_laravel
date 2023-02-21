<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => 'backhistory'], function(){

    Route::resource('post', PostController::class)->middleware('auth');
    Route::get('/',[LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});


// Route::get('/', [LoginController::class, 'home']);
Route::post('actionlogin', [Logincontroller::class, 'actionlogin']);

Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);

