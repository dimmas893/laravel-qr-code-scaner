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




Route::get('/', [\App\Http\Controllers\UserController::class, 'datauser']);
Route::get('/scan', [\App\Http\Controllers\UserController::class, 'scan']);
Route::post('/scan', [\App\Http\Controllers\UserController::class, 'scanpost']);
Route::get('qrcode/{id}', [\App\Http\Controllers\UserController::class, 'generate'])->name('generate');
