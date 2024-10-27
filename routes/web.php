<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruitmentController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
//Post
Route::get('/posts', [PostController::class, 'index'])->name('post');
Route::get('/post/{id}', [PostController::class, 'detailDocument'])->name('detail_document');
Route::get('/document', [PostController::class, 'document'])->name('document');

// Recruitment
Route::get('/recruitment', [RecruitmentController::class, 'index'])->name('recruitments');
Route::get('/recruitment/{id}', [RecruitmentController::class,'getRecruitment'])->name('recruitment');
