<?php

declare (strict_types = 1);

use App\Http\Controllers\PeopleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/zurek305428/people', [\App\Http\Controllers\PeopleController::class, 'index']);
Route::post('/zurek305428/people', [\App\Http\Controllers\PeopleController::class, 'create']);
Route::get('/zurek305428/people/{people}', [\App\Http\Controllers\PeopleController::class, 'read']);
Route::put('/zurek305428/people/{id}/{name}/{surname}', [\App\Http\Controllers\PeopleController::class, 'update']);
Route::delete('/zurek305428/people/{people}', [\App\Http\Controllers\PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 
