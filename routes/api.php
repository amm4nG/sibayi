<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('recipes', [RecipeController::class, 'index']);
Route::get('articles', [ArticleController::class, 'index']);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');