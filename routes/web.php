<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/youtube', [App\Http\Controllers\YoutubeController::class, 'index'])->name('index');
Route::get('/youtube/create', [App\Http\Controllers\YoutubeController::class, 'create'])->name('create');
Route::post('/youtube/store', [App\Http\Controllers\YoutubeController::class, 'store'])->name('store');

Route::get('/members', [App\Http\Controllers\MembersController::class, 'index'])->name('index');
