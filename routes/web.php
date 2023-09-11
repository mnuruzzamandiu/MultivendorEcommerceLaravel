<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// admin dashboard
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'adminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin/change-password', [AdminController::class, 'adminChangePassword'])->name('admin.change_password');
    Route::put('/admin/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin.profile.update');
    Route::get('/admin/logout', [AdminController::class, 'adminDestroy'])->name('admin.logout');
});

//seller dashboard
Route::middleware(['auth', 'role:seller'])->group(function () {

    Route::get('/seller/dashboard', [SellerController::class, 'sellerDashboard'])->name('seller.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/form-input', [AdminController::class, 'formInput'])->name('admin.form-input');
Route::get('/admin/form-layout', [AdminController::class, 'formLayout'])->name('admin.form-layout');
Route::get('/admin/company-profile', [AdminController::class, 'companyProfile'])->name('companyProfile');
Route::get('/admin/dataTable', [AdminController::class, 'dataTable'])->name('admin.dataTable');
Route::get('/admin/salesDashboard', [AdminController::class, 'salesDashboard']);


require __DIR__ . '/auth.php';
