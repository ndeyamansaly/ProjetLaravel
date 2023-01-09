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
Route::get('/projet',  [App\Http\Controllers\ProjetController::class, 'vu']);
Route::post('/projet',  [App\Http\Controllers\ProjetController::class, 'enregistrer']);
Route::post('/supprimerprojet',  [App\Http\Controllers\ProjetController::class, 'destroy']);
Route::get('/liste_projet',  [App\Http\Controllers\ProjetController::class, 'liste']);
Route::get('/detail/{id}',  [App\Http\Controllers\ProjetController::class, 'detail']);

Route::get('/detail/phase/{id}',  [App\Http\Controllers\PhaseController::class, 'vu']);
Route::post('/detail/phase/{id}',  [App\Http\Controllers\PhaseController::class, 'enregistrer']);

