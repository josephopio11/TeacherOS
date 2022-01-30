<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentClassController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::view('about', 'about')->name('about');
    
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('subject', SubjectController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('class', StudentClassController::class);
    Route::resource('lesson', LessonController::class);
});

Auth::routes();