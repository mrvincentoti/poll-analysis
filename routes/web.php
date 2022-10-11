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
Route::get('/pvc/analysis', [SentimentController::class, 'pvc'])->name('pvc');
