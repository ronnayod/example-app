<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

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
})->name('home');


//การสร้าง Route

Route::get('/about',[AboutController::class,'index'])->name('about');

Route::get('/member',[MemberController::class,'index'])->name('mem');

Route::get('/admin', [AdminController::class,'index'])->name('admin')->middleware('check');
