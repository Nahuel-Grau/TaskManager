<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use App\Models\User;

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



Route::get('/', [TaskController::class, 'index'])->name('index.task');

Route::get('/create', function(){
    return view('create');
})->middleware(['auth', 'verified'])->name('create.task');






//register
Route::get('/register', function(){
    return view('auth/register');
})->name('register');
Route::post('/register',[ RegisterController::class, 'create'])->name('register.store');

//login - logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [logoutController::class, 'store'])->name('logout');

//create 
route::get('/create', [TaskController::class, 'create' ])->name('create.task');
route::post('/create', [TaskController::class, 'store' ])->name('post.create.task');

//delete
Route::delete('/delete/{task}', [TaskController::class, 'destroy'])->name('delete');

//edit
Route::get('/edit/{task}', function($task){
    $task = DB::table('tasks')->where('id', $task)->first();
    
    return view('edit',compact ('task'));

    })->name('edit.task');
Route::post('/edit/{task}', [TaskController::class, 'edit'])->name('edit');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
