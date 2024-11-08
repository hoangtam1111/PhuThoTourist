<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/detail-document/{id}', [PostController::class,'detailDocument'])->name('detail_document');
Route::get('post',[PostController::class, 'index'])->name('post');
Route::get('/document',[PostController::class, 'document'])->name('document');
Route::get('/recruitment',[RecruitmentController::class,'index'])->name('recruitments');
Route::get('detail-recruitment/{id}',[RecruitmentController::class,'detail'])->name('detail-recruitment');
