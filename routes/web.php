<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ServicesController;
use App\Http\Controllers\clients\DestinationsController;
use App\Http\Controllers\clients\ContactsController;
use App\Http\Controllers\BookingController;

// Admin Controllers
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GuideController;

/*
|--------------------------------------------------------------------------
| CLIENT ROUTES (Giao diện người dùng)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('service'); 
Route::get('/destinations', [DestinationsController::class, 'index'])->name('destination');
Route::get('/contact', [ContactsController::class, 'index'])->name('contact');

// 1. Route để hiển thị form đặt tour (GET)
Route::get('/booking/{id}', [App\Http\Controllers\BookingController::class, 'create'])->name('booking.form');

// 2. Route để xử lý lưu dữ liệu khi khách nhấn "Xác nhận" (POST)
Route::post('/booking/store', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');

/* Đặt phòng (Booking) */
// Route hiển thị form (GET) - khớp với ID tour
Route::get('/booking/{id}', [BookingController::class, 'create'])->name('booking.form');
// Route xử lý lưu dữ liệu (POST)
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (Quản trị)
|--------------------------------------------------------------------------
*/

// Đăng nhập & Đăng xuất Admin
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', function () {
    auth()->logout();
    return redirect()->route('home');
})->name('admin.logout');

// Nhóm Admin được bảo vệ bằng middleware 'auth'
Route::middleware('auth')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Quản lý đơn đặt hàng
    Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings');

    // Resources (Danh mục, Tour, User, Guide)
    Route::resource('categories', CategoryController::class);
    Route::resource('tours', TourController::class);
    Route::resource('users', UserController::class);
    Route::resource('guides', GuideController::class);
});

// test commit
// test commit 2
// test commit 3