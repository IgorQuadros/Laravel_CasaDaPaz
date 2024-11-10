<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DoacaoController;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('doacoes', DoacaoController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
