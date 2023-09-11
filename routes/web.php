<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/resume', [HomeController::class, 'resume'])->name('home.resume');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/about-me', [HomeController::class, 'about_me'])->name('home.about_me');
