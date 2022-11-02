<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\SkincareController;
use App\Http\Controllers\HairController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/main', [UserController::class, 'index'])->name('main');

Route::resource('/makeup', MakeupController::class);

Route::resource('/skincare', SkincareController::class);

Route::resource('/hair', HairController::class);

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('post_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/signup', [LoginController::class, 'store'])->name('post_signup');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
