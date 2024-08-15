<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function(){
    return view('index');
})->name('index.task');

Route::get('/create', function(){
    return view('create');
})->name('create.task');

Route::get('/edit', function(){
    return view('edit');
})->name('edit.task');

Route::get('/register', function(){
    return view('auth/register');
})->name('register');


Route::post('/register',[ TaskController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [logoutController::class, 'store'])->name('logout');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
