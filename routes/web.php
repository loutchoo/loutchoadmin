<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'redirect']);
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/todolist', [MainController::class, 'todolist']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/projects', [MainController::class, 'projects']);

Route::get('/createactivity', [ActivityController::class, 'home']);
Route::post('/createactivity', [ActivityController::class, 'store']);

Route::prefix('showactivity')->group(function() {
Route::get('/{id}', [ActivityController::class, 'show']);});

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/admin', [AdminController::class, 'changepassword']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'connect']);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);