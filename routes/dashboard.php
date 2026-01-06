<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ExperienceController;


Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    Route::resource('/experiences', ExperienceController::class);

    Route::get('/educations', [DashboardController::class, 'educations'])->name('educations');

    Route::get('/skills', [DashboardController::class, 'skills'])->name('skills');

    Route::get('/projects', [DashboardController::class, 'projects'])->name('projects');

    Route::get('/messages', [DashboardController::class, 'messages'])->name('messages');

    Route::get('/languages', [DashboardController::class, 'languages'])->name('languages');

    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
});
