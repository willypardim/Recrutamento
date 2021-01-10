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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/candidato', [App\Http\Controllers\CandidatoController::class, 'index'])->name('candidato.index');
    Route::get('/candidato/create', [App\Http\Controllers\CandidatoController::class, 'create'])->name('candidato.create');
    Route::post('/candidato', [App\Http\Controllers\CandidatoController::class, 'store'])->name('candidato.store');

});