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
    return view('inicio');
})->name('inicio.inicio');

Route::get('/success', function () {
    return view('candidatos.success');
})->name('success.success');

Route::get('/candidato/create', [App\Http\Controllers\CandidatoController::class, 'create'])->name('candidato.create');
Route::post('/candidato', [App\Http\Controllers\CandidatoController::class, 'store'])->name('candidato.store');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\CandidatoController::class, 'index'])->name('candidato.index');
    
    Route::get('/candidato/{id}', [App\Http\Controllers\CandidatoController::class, 'show'])->name('candidato.show');
    
    Route::any('/candidato/delete/{id}', [App\Http\Controllers\CandidatoController::class, 'destroy'])->name('candidato.destroy');
    Route::any('/candidato/edit/{id}', [App\Http\Controllers\CandidatoController::class, 'edit'])->name('candidato.edit');
    Route::any('/home/processo/update/{id}', [App\Http\Controllers\CandidatoController::class, 'update'])->name('candidato.update');
});