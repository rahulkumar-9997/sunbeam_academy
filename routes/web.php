<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TrackVisitor;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CacheController;
use App\Http\Controllers\Backend\ForgotPasswordController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BrancheController;
use App\Http\Controllers\Backend\DisclosureController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\NoticeBoardController;
use App\Http\Controllers\Backend\AnnouncementController;
use App\Http\Controllers\Backend\ClassesController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\OurAlumniController;
use App\Http\Controllers\Backend\AchieversController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get-daily-visitors', [DashboardController::class, 'getDailyVisitors'])->name('get-daily-visitors');
    Route::get('/clear-cache', [CacheController::class, 'clearCache'])->name('clear-cache');
    Route::resource('manage-banner', BannerController::class)->names('manage-banner');
    Route::get('branches', [BrancheController::class, 'index'])->name('branches');
    Route::get('branches-create', [BrancheController::class, 'create'])->name('branches.create');
    Route::POST('branches-store', [BrancheController::class, 'store'])->name('branches.store');
    Route::get('branches/{id}/edit', [BrancheController::class, 'edit'])->name('branches.edit');
    Route::put('branches/{id}', [BrancheController::class, 'update'])->name('branches.update');
    Route::delete('branches/{id}', [BrancheController::class, 'destroy'])->name('branches.destroy');
    Route::resource('manage-album', AlbumController::class)->names('manage-album');
    Route::resource('manage-gallery', GalleryController::class)->names('manage-gallery');
    Route::resource('manage-announcement', AnnouncementController::class)->names('manage-announcement');
    Route::resource('manage-disclosure', DisclosureController::class)->names('manage-disclosure');
    Route::resource('manage-testimonials', TestimonialController::class)->names('manage-testimonials');
    Route::resource('manage-our-alumni', OurAlumniController::class)->names('manage-our-alumni');
    Route::resource('manage-achievers', AchieversController::class)->names('manage-achievers');
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
    /**Blog route */
    Route::get('manage-blog', [BlogController::class, 'index'])->name('manage-blog.index');
    Route::get('manage-blog/create', [BlogController::class, 'create'])->name('manage-blog.create');
    Route::post('manage-blog/store', [BlogController::class, 'store'])->name('manage-blog.store');
    Route::get('manage-blog/{id}/edit', [BlogController::class, 'edit'])->name('manage-blog.edit');
    Route::put('manage-blog/{id}/update', [BlogController::class, 'update'])->name('manage-blog.update');
    Route::delete('manage-blog/{id}', [BlogController::class, 'destroy'])->name('manage-blog.destroy');

    /**Blog route */
});


Route::get('about-us', [FrontHomeController::class, 'aboutUs'])->name('about-us');
Route::get('contact-us', [FrontHomeController::class, 'contactUs'])->name('contact-us');
Route::get('notices/{branch?}', [FrontHomeController::class, 'noticeList'])
    ->name('notices.index');
/**Handle both default and branch-specific notices */
Route::get('notice/{slug}', [FrontHomeController::class, 'noticeDetails'])->name('notices.show');
Route::get('classes', [FrontHomeController::class, 'classesList'])->name('classes.list');
Route::get('classes/{slug}', [FrontHomeController::class, 'classesDetails'])->name('classes.details');
Route::get('blog', [FrontHomeController::class, 'blogList'])->name('blog');
Route::get('blog/{slug}', [FrontHomeController::class, 'blogDetails'])->name('blog.details');
Route::get('album-home/{id}', [FrontHomeController::class, 'albumHomeAjax'])->name('album.home');
Route::get('ajax-testimonial/{id}', [FrontHomeController::class, 'AjaxTestimonials'])->name('ajax.testimonial');

Route::get('disclosure/{branchSlug}', [FrontHomeController::class, 'disclosureListBranchWise'])->name('disclosure.branch');
Route::get('alumni/{slug}', [FrontHomeController::class, 'alumniDetails'])->name('alumni.details');
Route::get('achievers', [FrontHomeController::class, 'achieversList'])->name('achievers');
Route::get('achievers/{slug}', [FrontHomeController::class, 'achieversDetails'])->name('achievers.details');

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

// Route::prefix('branches')->group(function () {
//     Route::get('/sunbeam-academy-samneghat', [FrontHomeController::class, 'sunbeamAcademySamneghat'])->name('sunbeam-academy-samneghat');
//     Route::get('/sunbeam-academy-durgakund', [FrontHomeController::class, 'sunbeamAcademyDurgakund'])->name('sunbeam-academy-durgakund');
//     Route::get('/sunbeam-academy-sarainandan', [FrontHomeController::class, 'sunbeamAcademySarainandan'])->name('sunbeam-academy-sarainandan');
//     Route::get('/sunbeam-academy-knowledge-park', [FrontHomeController::class, 'sunbeamAcademyKnowledgePark'])->name('sunbeam-academy-knowledge-park');
//     Route::post('/enquiry-submit', [FrontHomeController::class, 'branchEnquirySubmitForm'])->name('enquiry.submit');
// });

// Route::prefix('branches')->group(function () {
//     Route::get('/sunbeam/academy/samneghat', [FrontHomeController::class, 'sunbeamAcademySamneghat'])->name('sunbeam-academy-samneghat');
//     Route::get('/sunbeam/academy/durgakund', [FrontHomeController::class, 'sunbeamAcademyDurgakund'])->name('sunbeam-academy-durgakund');
//     Route::get('/sunbeam/academy/sarainandan', [FrontHomeController::class, 'sunbeamAcademySarainandan'])->name('sunbeam-academy-sarainandan');
//     Route::get('/sunbeam/academy/knowledge-park', [FrontHomeController::class, 'sunbeamAcademyKnowledgePark'])->name('sunbeam-academy-knowledge-park');
//     
// });
Route::get('/check-domain', function (\Illuminate\Http\Request $request) {
    return 'Host: ' . $request->getHost();
});
Route::domain('www.sunbeamacademysmn.com')->group(function () {
    Route::get('/', [FrontHomeController::class, 'sunbeamAcademySamneghat']);
});
Route::domain('www.sunbeamacademydkd.com')->group(function () {
    Route::get('/', [FrontHomeController::class, 'sunbeamAcademyDurgakund']);
});
Route::domain('www.sunbeamacademysrn.com')->group(function () {
    Route::get('/', [FrontHomeController::class, 'sunbeamAcademySarainandan']);
});
Route::domain('www.sunbeamacademykp.com')->group(function () {
    Route::get('/', [FrontHomeController::class, 'sunbeamAcademyKnowledgePark']);
});

Route::get('/', [FrontHomeController::class, 'home'])->name('home');
Route::post('/enquiry-submit', [FrontHomeController::class, 'branchEnquirySubmitForm'])->name('enquiry.submit');
Route::get('/images/{folder}/{image}', [FrontHomeController::class, 'resizeImage']);

Route::prefix('life-at-sunbeam')->group(function () {
    Route::get('/hobby-classes', [FrontHomeController::class, 'hobbyClasses'])->name('life.hobby-classes');
    Route::get('/school-cinema', [FrontHomeController::class, 'schoolCinema'])->name('life.school-cinema');
    Route::get('/stem-labs', [FrontHomeController::class, 'stemLabs'])->name('life.stem-labs');
    Route::get('/early-learning-labs', [FrontHomeController::class, 'earlyLearningLabs'])->name('life.early-learning-labs');
    Route::get('/music-labs', [FrontHomeController::class, 'musicLabs'])->name('life.music-labs');
    Route::get('/shooting-academy', [FrontHomeController::class, 'shootingAcademy'])->name('life.shooting-academy');
    Route::get('/cricket-academy', [FrontHomeController::class, 'cricketAcademy'])->name('life.cricket-academy');
    Route::get('/dramatics-radio', [FrontHomeController::class, 'dramaticsRadio'])->name('life.dramatics-radio');
});

Route::prefix('hostel')->group(function () {
    Route::get('/boys-hostel', [FrontHomeController::class, 'boysHostel'])->name('hostel.boys');
    Route::get('/girls-hostel', [FrontHomeController::class, 'girlsHostel'])->name('hostel.girls');
    Route::get('/weekly-boarding', [FrontHomeController::class, 'weeklyBoarding'])->name('hostel.weekly-boarding');
    Route::get('/rules-regulations', [FrontHomeController::class, 'hostelRulesRegulations'])->name('hostel.rules');
});
Route::get('clear-cache', [FrontHomeController::class, 'clearCache'])->name('clear-cache');
