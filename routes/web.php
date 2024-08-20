<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    $task= DB::table('tasks')->get();
    return view('index', ['tasks'=>$task]);
})->name('index.task');



Route::get('/create', function(){
    return view('create');
})->name('create.task');





Route::get('/edit', function(){
    return view('edit');
})->name('edit.task');

//register
Route::get('/register', function(){
    return view('auth/register');
})->name('register');
Route::post('/register',[ RegisterController::class, 'store'])->name('register.store');

//login - logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [logoutController::class, 'store'])->name('logout');

//create 
route::get('/create', [TaskController::class, 'index' ])->name('create.task');
route::post('/create', [TaskController::class, 'store' ])->name('post.create.task');

//delete
route::post('/',[TaskController::class, 'destroy'])->name('delete');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
