<?php

use App\Http\Controllers\MotoristaController;
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

Route::get('/motorista',[MotoristaController::class,'index']);
Route::get('/motorista/motorista_create',[MotoristaController::class,'create'])->name('motorista_view');
Route::post('/motorista/create',[MotoristaController::class,'store'])->name('cadastrar_motorista');
Route::get('/motorista/editar/{id}',[MotoristaController::class,'edit'])->name('editar_motorista');
Route::post('/motorista/editar/{id}',[MotoristaController::class,'update'])->name('alterar_motorista');
Route::get('/motorista/excluir/{id}',[MotoristaController::class,'delete'])->name('apagar_motorista');
Route::post('/motorista/excluir/{id}',[MotoristaController::class,'destroy'])->name('excluir_motorista');

