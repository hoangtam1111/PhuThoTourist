<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FieldController;
use App\Http\Controllers\Admin\TypePostController;
use App\Http\Controllers\Admin\TypeWorkController;
use App\Http\Controllers\Admin\WorkingPlaceController;
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
Route::get('detail-recruitment/{id}',[RecruitmentController::class,'detail'])->name('detail_recruitment');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminController::class,'index'])->name('index');

    // Field
    Route::prefix('field')->name('field.')->group(function(){
        Route::get('/', [FieldController::class,'index'])->name('index');
        Route::get('/insert',[FieldController::class,'insert'])->name('insert');
        Route::post('/insert',[FieldController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[FieldController::class,'update'])->name('update');
        Route::post('/update',[FieldController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[FieldController::class,'delete'])->name('delete');
    });
    // Type Post
    Route::prefix('type-post')->name('type-post.')->group(function(){
        Route::get('/', [TypePostController::class,'index'])->name('index');
        Route::get('/insert',[TypePostController::class,'insert'])->name('insert');
        Route::post('/insert',[TypePostController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[TypePostController::class,'update'])->name('update');
        Route::post('/update',[TypePostController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[TypePostController::class,'delete'])->name('delete');
    });
    // Type Work
    Route::prefix('type-work')->name('type-work.')->group(function(){
        Route::get('/', [TypeWorkController::class,'index'])->name('index');
        Route::get('/insert',[TypeWorkController::class,'insert'])->name('insert');
        Route::post('/insert',[TypeWorkController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[TypeWorkController::class,'update'])->name('update');
        Route::post('/update',[TypeWorkController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[TypeWorkController::class,'delete'])->name('delete');
    });
    // Working Place
    Route::prefix('working-place')->name('working-place.')->group(function(){
        Route::get('/', [WorkingPlaceController::class,'index'])->name('index');
        Route::get('/insert',[WorkingPlaceController::class,'insert'])->name('insert');
        Route::post('/insert',[WorkingPlaceController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[WorkingPlaceController::class,'update'])->name('update');
        Route::post('/update',[WorkingPlaceController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[WorkingPlaceController::class,'delete'])->name('delete');
    });
});
