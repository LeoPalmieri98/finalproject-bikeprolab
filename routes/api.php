<?php

use App\Http\Controllers\Api\RevisionController;
use App\Http\Controllers\Api\SuspensionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("suspensions", [SuspensionController::class, "index"]);

Route::get("suspensions/{suspension}", [SuspensionController::class, "show"]);

Route::post('revisions', [RevisionController::class, "store"]);
