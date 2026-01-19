<?php

use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ContactsController;
use App\Http\Controllers\clients\DestinationsController;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\ServicesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',[HomeController::class,'index'])->name('home');
 Route::get('/about',[AboutController::class,'index'])->name('about');
 Route::get('/service',[ServicesController::class,'index'])->name('service');
 Route::get('/destination',[DestinationsController::class,'index'])->name('destination');
 Route::get('/contact',[ContactsController::class,'index'])->name('contact');





