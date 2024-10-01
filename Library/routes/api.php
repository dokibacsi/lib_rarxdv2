<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/book', function (Request $request) {
    return $request->book();
})->middleware('auth:sanctum');
Route::get('/copy', function (Request $request) {
    return $request->copy();
})->middleware('auth:sanctum');
Route::get('/lending', function (Request $request) {
    return $request->copy();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/userFelvisz', [UserController::class, 'store']);
Route::put('/userModosit/{id}', [UserController::class, 'update']);
Route::delete('/userTorol/{id}', [UserController::class, 'destroy']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::post('/bookFelvisz', [BookController::class, 'store']);
Route::put('/bookModosit/{id}', [BookController::class, 'update']);
Route::delete('/bookTorol/{id}', [BookController::class, 'destroy']);


Route::get('/copies', [CopyController::class, 'index']);
Route::get('/copy/{id}', [CopyController::class, 'show']);
Route::post('/copyFelvisz', [CopyController::class, 'store']);
Route::put('/copyModosit/{id}', [CopyController::class, 'update']);
Route::delete('/copyTorol/{id}', [CopyController::class, 'destroy']);

Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lending/{id}', [LendingController::class, 'show']);
Route::post('/lendingFelvisz', [LendingController::class, 'store']);
Route::put('/lendingModosit/{id}', [LendingController::class, 'update']);
Route::delete('/lendingTorol/{id}', [LendingController::class, 'destroy']);