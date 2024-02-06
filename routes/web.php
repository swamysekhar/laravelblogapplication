<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\PostController;
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
//Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [HomeController::class, 'index'])->name('login');
Route::post('post-login', [HomeController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [HomeController::class, 'registration'])->name('register');
Route::post('post-registration', [HomeController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [HomeController::class, 'dashboard']); 
Route::get('logout', [HomeController::class, 'logout'])->name('logout');
Route::resource('posts', PostController::class)->middleware('auth.user');
