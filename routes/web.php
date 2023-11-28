<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\VideoController;
use App\Http\Controllers\Backend\CmsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'AboutUs'])->name('about.us');
Route::get('/contact-us', [HomeController::class,'ContactUs'])->name('contact.us');
Route::prefix('admin')->group(function () {
    // Routes inside this group will have the prefix '/admin' and require 'auth' and 'admin' middleware
    Route::get('/', [AuthController::class,'index'])->name('admin');
    Route::post('/login', [AuthController::class,'adminLogin'])->name('admin.login');
    Route::middleware('is_login')->group(function () {
        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
        Route::get('video-upload', [VideoController::class,'index'])->name('video.upload');
        Route::post('video-upload', [ VideoController::class, 'videoUpload' ])->name('video.upload');
        Route::get('video-list', [ VideoController::class, 'list' ])->name('video.list');
        Route::get('video-lists', [ VideoController::class, 'videoList' ])->name('video.lists');
        Route::get('logout', [ AuthController::class, 'logout' ])->name('logout');



        Route::get('contact-us', [CmsController::class,'contactUsPage'])->name('admin.contact.us');

        Route::get('about-us', [CmsController::class,'aboutUsPage'])->name('admin.about.us');

        Route::get('privacy-policy', [CmsController::class,'privacyPolicyPage'])->name('admin.privacy.policy');

        Route::get('terms-condition', [CmsController::class,'termsConditionPage'])->name('admin.terms.condition');

        Route::post('terms-condition', [CmsController::class,'saveTermsCondition'])->name('admin.terms.condition');

        Route::post('privacy-policy', [CmsController::class,'savePrivacyPolicy'])->name('admin.privacy.policy');

        Route::post('about-us', [CmsController::class,'saveAboutUs'])->name('admin.about.us');
        
        Route::post('contact-us', [CmsController::class,'saveContactUs'])->name('admin.contact.us');
    });
    //Route::post('/login', [AuthController::class,'index'])->name('admin.login');
    // More routes specific to the admin panel
});
