<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\designController;
use App\Http\Controllers\moreController;

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

Route::get('/', function () {
    return redirect()->route('home');
    // return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/admin', [App\Http\Controllers\dashboardController::class, 'index'])->name('dashboard');
Route::resource('user', userController::class);
Route::resource('design', designController::class);
Route::get('/more', [moreController::class, 'index'])->name('more');
