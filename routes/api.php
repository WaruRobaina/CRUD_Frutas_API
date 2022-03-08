<?php

use App\Http\Controllers\Api\FruitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(FruitController::class)->group(function(){
    Route::get('/fruits', 'index');
    Route::post('/fruit', 'store');
    Route::get('/fruit/{id}', 'show');
    Route::put('/fruit/{id}', 'update');
    Route::delete('/fruit/{id}', 'destroy');
});
