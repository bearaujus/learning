<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecryptedController;
use App\Http\Controllers\EncryptedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\App;

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
    Controller::init();
    return redirect('/home');
});

Route::get('/home', function () {
    Controller::init();
    return view('index', [
        'title' => __('home/form.title')
    ]);
});

Route::get('/{lang}/{url}', [LanguageController::class, 'switch']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/encrypt', [EncryptedController::class, 'index'])->middleware('auth');
Route::post('/encrypt', [EncryptedController::class, 'store'])->middleware('auth');

Route::get('/decrypt', [DecryptedController::class, 'index'])->middleware('auth');
Route::post('/decrypt', [DecryptedController::class, 'store'])->middleware('auth');

Route::get('/profile', function () {
    Controller::init();
    return view('profile/index', [
        'title' => __('profile/form.title')
    ]);
});

Route::get('/about', function () {
    Controller::init();
    return view('about', [
        'title' => __('about/form.title')
    ]);
});
