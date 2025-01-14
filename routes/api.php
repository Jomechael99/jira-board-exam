<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->as('v1:')->group(function() {
    Route::apiResource('task', TaskController::class);
});
