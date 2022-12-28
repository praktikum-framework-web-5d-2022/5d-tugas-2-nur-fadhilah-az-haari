<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MahasiswaController;

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

Route::redirect('/', '/DosenEloquent');

Route::get('/MahasiswaRaw', [MahasiswaController::class, 'index']);
Route::get('/MahasiswaRawInsert', [MahasiswaController::class, 'insert']);
Route::get('/MahasiswaRawDelete', [MahasiswaController::class, 'delete']);
Route::get('/MahasiswaRawUpdate', [MahasiswaController::class, 'update']);

Route::get('/MatkulQuery', [MatkulController::class, 'index']);
Route::get('/MatkulQueryInsert', [MatkulController::class, 'insert']);
Route::get('/MatkulQueryDelete', [MatkulController::class, 'delete']);
Route::get('/MatkulQueryUpdate', [MatkulController::class, 'update']);

Route::get('/DosenEloquent', [DosenController::class, 'index']);
Route::get('/DosenEloquentInsert', [DosenController::class, 'insert']);
Route::get('/DosenEloquentDelete', [DosenController::class, 'delete']);
Route::get('/DosenEloquentUpdate', [DosenController::class, 'update']);
