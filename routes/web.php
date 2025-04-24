<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
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
Route::prefix('schlorships')->group(function () {
    Route::get('/elite-11', [FrontHomeController::class, 'elite11'])->name('elite-11');
    Route::get('/sathee', [FrontHomeController::class, 'sathee'])->name('sathee');
});

Route::prefix('branches')->group(function () {
    Route::get('/sunbeam-academy-samneghat', [FrontHomeController::class, 'sunbeamAcademySamneghat'])->name('sunbeam-academy-samneghat');
});

Route::prefix('life-at-sunbeam')->group(function() {
    Route::get('/hobby-classes', [FrontHomeController::class, 'hobbyClasses'])->name('life.hobby-classes');
    Route::get('/school-cinema', [FrontHomeController::class, 'schoolCinema'])->name('life.school-cinema');
    Route::get('/stem-labs', [FrontHomeController::class, 'stemLabs'])->name('life.stem-labs');
    Route::get('/early-learning-labs', [FrontHomeController::class, 'earlyLearningLabs'])->name('life.early-learning-labs');
    Route::get('/music-labs', [FrontHomeController::class, 'musicLabs'])->name('life.music-labs');
    Route::get('/shooting-academy', [FrontHomeController::class, 'shootingAcademy'])->name('life.shooting-academy');
    Route::get('/cricket-academy', [FrontHomeController::class, 'cricketAcademy'])->name('life.cricket-academy');
    Route::get('/dramatics-radio', [FrontHomeController::class, 'dramaticsRadio'])->name('life.dramatics-radio');
});

Route::prefix('hostel')->group(function() {
    Route::get('/boys-hostel', [FrontHomeController::class, 'boysHostel'])->name('hostel.boys');
    Route::get('/girls-hostel', [FrontHomeController::class, 'girlsHostel'])->name('hostel.girls');
    Route::get('/weekly-boarding', [FrontHomeController::class, 'weeklyBoarding'])->name('hostel.weekly-boarding');
    Route::get('/rules-regulations', [FrontHomeController::class, 'hostelRulesRegulations'])->name('hostel.rules');
});
Route::get('clear-cache', [FrontHomeController::class, 'clearCache'])->name('clear-cache');




