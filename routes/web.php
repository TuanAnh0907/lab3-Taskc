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

Route::get('/', [HomeController::class, 'getIndex'])->name('web.home');

Route::get('/detail', [HomeController::class, 'getDetail'])->name('web.detail');

Route::get('/category', [HomeController::class, 'getCategory'])->name('web.category');

Route::get('/login', [HomeController::class, 'login'])->name('web.login');

Route::get('/register', [HomeController::class, 'register'])->name('web.register');

