<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\UserManageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\User\ProfileController;

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

Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('loginHandler');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});

//Route recovery
Route::get('/forgot_password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot_password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');


Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
    Route::get('/', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/', [RegisterController::class, 'register'])->name('registerHandler');
});


Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.dashboard')->middleware('auth');

Route::group(['prefix' => 'contacts-profile', 'middleware' => 'auth'], function(){
    Route::get('/', [AdminProfileController::class, 'show'])->name('contacts-profile');
    Route::post('/update/{UserID}', [AdminProfileController::class, 'update'])->name('updateProfile');
    Route::post('/change-password/{UserID}', [AdminProfileController::class, 'changePassword'])->name('adminChangePassword');
});

// Route::group(['prefix' => 'contacts-list'], function(){
//     Route::get('/', [UserManageController::class, 'getAllUser'])->name('contacts-list');
//     Route::delete('/{UserID}', [UserManageController::class, 'delete'])->name('delete_user');
//     Route::get('/search', [UserManageController::class, 'findUsers'])->name('find_users');
//     Route::put('/update/{UserID}', [UserManageController::class, 'update'])->name('update_user');
//     Route::post('/create', [UserManageController::class, 'create'])->name('create_user');
// });

// Route::get('/statistics', [UserManageController::class, 'statistics'])->name('statistics');

Route::get('', function() {
    return view('welcome');
})->name('home');

Route::get('/test_admin', function() {
    return view('admin.index');
});

// Route::get('/admin/index', [AdminController::class, 'showAdmin'])->name('admin.index');
// Route::get('/admin/profile', [AdminController::class, 'showAdminProfile'])->name('admin.profile');
// Route::post('/admin/update-profile/{UserID}', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');


Route::group(['prefix' => 'user'], function() {
    Route::get('/index', function() {return view('user.index');})->name('user.index');
    Route::get('/library', function() {return view('user.library');})->name('user.library');
});


// Chart Routes
Route::get('/admin-chart', function() {return view('admin.charts'); })->name('admin.charts');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'showFromProfile'])->name('user.profile');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/profile/avatar', [ProfileController::class, 'updateAvatar'])->name('user.profile.avatar');
    Route::post('/profile/password', [ProfileController::class, 'changePassword'])->name('user.profile.password');
});