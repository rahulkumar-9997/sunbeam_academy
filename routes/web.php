<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::prefix('academics')->group(function () {
    Route::get('/curriculum', [FrontHomeController::class, 'academicsCurriculum'])->name('curriculum');
    Route::get('/school-levels', [FrontHomeController::class, 'schoolLevels'])->name('school-levels');
    Route::get('/holistic-educational-approach', [FrontHomeController::class, 'holisticEducationalApproach'])->name('holistic-educational-approach');
    Route::get('/academic-support-programs', [FrontHomeController::class, 'academicSupportPrograms'])->name('academic-support-programs');
    Route::get('/day-bording-in-house', [FrontHomeController::class, 'dayBordingHouse'])->name('day-bording-in-house');
});

Route::prefix('admissions')->group(function () {
    Route::get('/book-a-tour', [FrontHomeController::class, 'bookAtour'])->name('book-a-tour');
    Route::get('/fee-structure', [FrontHomeController::class, 'feeStructure'])->name('fee-structure');
    Route::get('/rules-and-regulations', [FrontHomeController::class, 'rulesAndRegulations'])->name('rules-and-regulations');
    
});



Route::prefix('life-at-sunbeam')->name('life-at-sunbeam.')->group(function () {
    Route::get('/curriculum', [FrontHomeController::class, 'curriculum'])->name('curriculum');
    
   
    Route::get('/hostels', [FrontHomeController::class, 'hostels'])->name('hostels');
    Route::get('/rules-and-regulations', [FrontHomeController::class, 'rulesAndRegulations'])->name('rules-and-regulations');
});



