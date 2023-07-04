<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\WritingController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//admin panel login
Route::get('admin/home', [AdminController::class, 'index']);
Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login.admin');
Route::post('admin', [LoginController::class, 'login']);

//reading
Route::get('reading', [ReadingController::class, 'index']);

//writing
Route::get('writing', [WritingController::class, 'index'])->name('writing.index');
Route::get('writing/insert/ques', [WritingController::class, 'insertIndex']);
Route::post('writing/insert/store', [WritingController::class, 'store'])->name('writingInsert.store');
Route::post('writing/answer/submit', [WritingController::class, 'ansSubmit'])->name('writingAns.submit');
