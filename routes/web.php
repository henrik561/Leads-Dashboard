<?php

use App\Enums\LeadStatus;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::redirect('/', '/dashboard/leads/'.LeadStatus::UNQUALIFIED->value)->name('dashboard');
    Route::get('/leads/{status?}', [LeadController::class, 'index'])->name('leads.index')->defaults('status', LeadStatus::UNQUALIFIED->value);
    Route::patch('/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
