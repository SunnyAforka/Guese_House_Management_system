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
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/guests/index', [App\Http\Controllers\GuestsController::class, 'index'])->name('guest');
Route::get('/guests/create', [App\Http\Controllers\GuestsController::class, 'create'])->name('guest.new');
Route::post('/guest/store', [App\Http\Controllers\GuestsController::class, 'store'])->name('guest.add');
Route::delete('/guest/{guest}', [App\Http\Controllers\GuestsController::class, 'destroy'])->name('destroy.guest');
Route::get('/search', [App\Http\Controllers\GuestsController::class, 'search'])->name('search');

Route::get('/room/create', [App\Http\Controllers\RoomsController::class, 'create'])->name('room.new');
Route::post('/room/store', [App\Http\Controllers\RoomsController::class, 'store'])->name('room.add');

Route::get('/ttr/create', [App\Http\Controllers\TotalroomsController::class, 'create'])->name('ttr.new');
Route::post('/ttr/store', [App\Http\Controllers\TotalroomsController::class, 'store'])->name('ttr.add');
