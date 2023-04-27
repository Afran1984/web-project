<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SDProject;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[SDProject::class,'login']);
Route::get('/registration',[SDProject::class,'registration']);
Route::post('/registr-user',[SDProject::class,'registrUser'])->name('registr-user');
Route::post('/login-user',[SDProject::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[SDProject::class,'dashboard']);
Route::get('/logout',[SDProject::class,'logout']);


