<?php

use App\Http\Controllers\ProyectoController;
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

Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::post('/addproyecto', [ProyectoController::class, 'add']);
Route::get('/delete/{id}', [ProyectoController::class, 'delete']);
Route::get('/edit/{id}', [ProyectoController::class, 'edit']);
Route::post('/edit/{id}', [ProyectoController::class, 'update']);
