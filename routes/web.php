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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', [App\Http\Controllers\GuestController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/category/{id}', [App\Http\Controllers\GuestController::class, 'category'])->name('category');
Route::get('/service/{id}', [App\Http\Controllers\GuestController::class, 'service'])->name('service');

Route::get('/repair', [App\Http\Controllers\GuestController::class, 'repair'])->name('repair');

Route::get('/chat', [App\Http\Controllers\UserController::class, 'chat'])->name('chat');
Route::get('/add-conversation/{id}', [App\Http\Controllers\UserController::class, 'addConversation'])->name('add-conversation');
Route::post('/message', [App\Http\Controllers\UserController::class, 'sendMessage'])->name('send-message');
