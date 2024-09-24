<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
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

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/usersFelvisz', [UserController::class, 'store']);
Route::put('/usersModosit/{id}', [UserController::class, 'update']);
Route::delete('/usersTorol/{id}', [UserController::class, 'destroy']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/booksFelvisz', [BookController::class, 'store']);
Route::put('/booksModosit/{id}', [BookController::class, 'update']);
Route::delete('/booksTorol/{id}', [BookController::class, 'destroy']);


Route::get('/copies', [CopyController::class, 'index']);
Route::get('/copies/{id}', [CopyController::class, 'show']);
Route::post('/copiesFelvisz', [CopyController::class, 'store']);
Route::put('/copiesModosit/{id}', [CopyController::class, 'update']);
Route::delete('/copiesTorol/{id}', [CopyController::class, 'destroy']);