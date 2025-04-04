<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');

Route::prefix('life-at-sunbeam')->name('life-at-sunbeam.')->group(function () {
    Route::get('/curriculum', [FrontHomeController::class, 'curriculum'])->name('curriculum');
    Route::get('/academic-support-programs', [FrontHomeController::class, 'academicSupportPrograms'])->name('academic-support-programs');
    Route::get('/holistic-educational-approach', [FrontHomeController::class, 'holisticEducationalApproach'])->name('holistic-educational-approach');
    Route::get('/hostels', [FrontHomeController::class, 'hostels'])->name('hostels');
    Route::get('/rules-and-regulations', [FrontHomeController::class, 'rulesAndRegulations'])->name('rules-and-regulations');
});



