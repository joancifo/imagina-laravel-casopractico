<?php

use App\Http\Controllers\Api\CursoController;
use Illuminate\Support\Facades\Route;

Route::as('api.')->group(function() {
    Route::apiResource('curso', CursoController::class);
});
