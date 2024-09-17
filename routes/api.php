<?php

use App\Http\Controllers\LeadController;
use App\Http\Middleware\hasValidApiKeyMiddleware;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('leads')->group(function () {
        Route::post('/', [LeadController::class, 'store'])->middleware(hasValidApiKeyMiddleware::class);
        Route::post('/{lead}/change-status', [LeadController::class, 'changeStatus'])->name('api.lead.change-status');
    });
});
