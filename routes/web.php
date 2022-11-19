<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SentimentController;

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
    return view('analytics');
});

Route::get('/sentiment/analysis', [SentimentController::class, 'show'])->name('sentiments');
Route::get('/sentiment/analysis/geodata', [SentimentController::class, 'geodata'])->name('geodata');
Route::get('/pvc/analysis', [SentimentController::class, 'pvc'])->name('pvc');
Route::get('/sentiment/facebook', [SentimentController::class, 'facebook'])->name('facebook');
Route::get('/sentiment/instagram', [SentimentController::class, 'instagram'])->name('instagram');
Route::get('/sentiment/rally/{id}', [SentimentController::class, 'rally'])->name('rally');
Route::get('/salvafrika/admin', [SentimentController::class, 'admin'])->name('admin');

Route::post('/salvafrika/admin/store', [SentimentController::class, 'store'])->name('admin.store');
Route::get('/salvafrika/admin/getStateData/{id}', [SentimentController::class, 'getStateData'])->name('getStateData');
