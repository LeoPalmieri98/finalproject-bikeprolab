<?php

use App\Http\Controllers\Api\RevisionController;
use App\Http\Controllers\Api\suspensionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("suspensions", [suspensionController::class, "index"]);

Route::get("suspensions/{suspension}", [suspensionController::class, "show"]);

Route::apiResource('revisions', RevisionController::class);
