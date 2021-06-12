<?php

use App\Http\Controllers\Auth\Admin\Auth\AdminController;
use App\Http\Controllers\Auth\Admin\CourseAdminController;
use App\Http\Controllers\Auth\Admin\LessonAdminController;
use App\Http\Controllers\Auth\Admin\WordAdminController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware('auth:admin')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    Route::resource('/courses', CourseAdminController::class);
    Route::resource('/words', WordAdminController::class);
});
