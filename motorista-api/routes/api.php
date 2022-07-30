<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoristaController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/motorista/create',[MotoristaController::class,'store']);
Route::get('/motorista', [MotoristaController::class,'show']);
Route::get('/motorista/editar/{id}',[MotoristaController::class,'edit']);
Route::post('/motorista/excluir/{id}',[MotoristaController::class,'destroy']);
