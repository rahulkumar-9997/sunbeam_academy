<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TrackVisitor;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CacheController;
use App\Http\Controllers\Backend\ForgotPasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BrancheController;
use App\Http\Controllers\Backend\NoticeBoardController;
use App\Http\Controllers\Backend\ClassesController;

use App\Http\Controllers\Frontend\FrontHomeController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('forget/password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password');
    Route::post('forget.password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.submit');

    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-daily-visitors', [DashboardController::class, 'getDailyVisitors'])->name('get-daily-visitors');
    Route::get('/clear-cache', [CacheController::class, 'clearCache'])->name('clear-cache');
    Route::get('branches', [BrancheController::class, 'index'])->name('branches');
    Route::get('branches-create', [BrancheController::class, 'create'])->name('branches.create');
    Route::POST('branches-store', [BrancheController::class, 'store'])->name('branches.store');
    Route::get('branches/{id}/edit', [BrancheController::class, 'edit'])->name('branches.edit');
    Route::put('branches/{id}', [BrancheController::class, 'update'])->name('branches.update');
    Route::delete('branches/{id}', [BrancheController::class, 'destroy'])->name('branches.destroy');
    /*Notice Board */
    // Notice Board CRUD routes
    Route::get('notice-board', [NoticeBoardController::class, 'index'])->name('manage-notice-board');
    Route::get('notice-board/create', [NoticeBoardController::class, 'create'])->name('notice-board.create');
    Route::post('notice-board/store', [NoticeBoardController::class, 'store'])->name('notice-board.store');
    Route::get('notice-board/{id}/edit', [NoticeBoardController::class, 'edit'])->name('notice-board.edit');
    Route::put('notice-board/{id}/update', [NoticeBoardController::class, 'update'])->name('notice-board.update');
    Route::delete('notice-board/{id}/delete', [NoticeBoardController::class, 'destroy'])->name('notice-board.destroy');
    Route::post('notice-board/{id}/toggle-status', [NoticeBoardController::class, 'toggleStatus'])->name('notice-board.toggle-status');
    /*Notice Board */
    /*Classes */
    Route::get('manage-classes', [ClassesController::class, 'index'])->name('manage-classes');
    Route::get('manage-classes/create', [ClassesController::class, 'create'])->name('manage-classes.create');
    Route::post('manage-classes/store', [ClassesController::class, 'store'])->name('manage-classes.store');
    Route::get('manage-classes/{id}/edit', [ClassesController::class, 'edit'])->name('manage-classes.edit');
    Route::put('manage-classes/{id}/update', [ClassesController::class, 'update'])->name('manage-classes.update');
    Route::delete('manage-classes/{id}/delete', [ClassesController::class, 'destroy'])->name('manage-classes.destroy');
    Route::post('manage-classes/{id}/toggle-status', [ClassesController::class, 'toggleStatus'])->name('manage-classes.toggle-status');
    /*Classes */
});

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
Route::get('notices', [FrontHomeController::class, 'noticeList'])->name('notices.index');
Route::get('notice/{slug}', [FrontHomeController::class, 'noticeDetails'])->name('notices.show');
Route::get('classes', [FrontHomeController::class, 'classesList'])->name('classes.list');
Route::get('classes/{slug}', [FrontHomeController::class, 'classesDetails'])->name('classes.details');

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




