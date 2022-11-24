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

Route::get('/about', [App\Http\Controllers\WebController::class, 'indexAbout']);
Route::get('/dev', [App\Http\Controllers\WebController::class, 'indexDev']);
Route::get('/carta-organisasi', [App\Http\Controllers\WebController::class, 'indexCarta']);
Route::get('/aktiviti', [App\Http\Controllers\WebController::class, 'indexAktiviti']);
Route::get('/galeri', [App\Http\Controllers\WebController::class, 'indexGaleri']);

Route::get('/aktiviti/kemasyarakatan', [App\Http\Controllers\WebController::class, 'indexMasyarakat']);
Route::get('/aktiviti/keagamaan', [App\Http\Controllers\WebController::class, 'indexAgama']);
Route::get('/aktiviti/ekonomi', [App\Http\Controllers\WebController::class, 'indexEkonomi']);
Route::get('/aktiviti/prasarana', [App\Http\Controllers\WebController::class, 'indexPrasarana']);
Route::get('/aktiviti/riadah', [App\Http\Controllers\WebController::class, 'indexRiadah']);
