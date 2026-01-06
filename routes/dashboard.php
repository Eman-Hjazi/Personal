<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\EducationController;
use App\Http\Controllers\Dashboard\ExperienceController;

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    Route::resource('/experiences', ExperienceController::class);

    Route::resource('/educations', EducationController::class);

    Route::resource('/skills', SkillController::class);

    Route::resource('/projects', ProjectController::class);

    Route::get('/messages', [DashboardController::class, 'messages'])->name('messages');

    Route::resource('/languages', LanguageController::class);

    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');
});
