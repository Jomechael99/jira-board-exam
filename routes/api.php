<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->as('v1:')->group(function() {
    Route::get('task/{uuid}' , [TaskController::class, 'show'])->name('task.show');
    Route::put('task/{uuid}' , [TaskController::class, 'update'])->name('task.update');
    Route::delete('task/{uuid}' , [TaskController::class, 'destroy'])->name('task.destroy');
    Route::apiResource('task', TaskController::class)->except('show', 'update' , 'delete');
});
