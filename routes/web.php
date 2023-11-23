<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\VideoController;
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
        Route::get('logout', [ AuthController::class, 'logout' ])->name('logout');
    });
    //Route::post('/login', [AuthController::class,'index'])->name('admin.login');
    // More routes specific to the admin panel
});
