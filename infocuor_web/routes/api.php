<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/projects', [ProjectController::class, 'createProject']);
Route::put('/projects/{id}/stage', [ProjectController::class, 'updateStage']);
Route::get('/projects/{id}', [ProjectController::class, 'getProjectStage']);

