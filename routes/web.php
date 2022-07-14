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
Route::get('/perawatan', [App\Http\Controllers\PerawatanController::class, 'index']);
Route::get('/perawatan/create', [App\Http\Controllers\PerawatanController::class, 'create']);
Route::post('/perawatan', [App\Http\Controllers\PerawatanController::class, 'store']);
Route::get('/perawatan/{id}/edit', [App\Http\Controllers\PerawatanController::class, 'edit']);
Route::patch('/perawatan/{id}', [App\Http\Controllers\PerawatanController::class, 'update']);
Route::delete('/perawatan/{id}', [App\Http\Controllers\PerawatanController::class, 'destroy']);

Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index']);
Route::get('/booking/create', [App\Http\Controllers\BookingController::class, 'create']);
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'store']);
Route::get('/booking/{id}/edit', [App\Http\Controllers\BookingController::class, 'edit']);
Route::patch('/booking/{id}', [App\Http\Controllers\BookingController::class, 'update']);
Route::delete('/booking/{id}', [App\Http\Controllers\BookingController::class, 'destroy']);
