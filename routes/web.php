<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplyWorkController;
use App\Http\Controllers\Admin\CentralServiceController;
use App\Http\Controllers\Admin\FieldController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\RecruitmentController as AdminRecruitmentController;
use App\Http\Controllers\Admin\SliderController;
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
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginAdmin'])->name('loginAdmin');
Route::get('/logout', [HomeController::class, 'logoutAdmin'])->name('logoutAdmin');

Route::get('/detail-document/{id}', [PostController::class,'detailDocument'])->name('detail_document');
Route::get('post',[PostController::class, 'index'])->name('post');
Route::get('/document',[PostController::class, 'document'])->name('document');

Route::get('/recruitment',[RecruitmentController::class,'index'])->name('recruitments');
Route::post('/apply-work',[RecruitmentController::class,'apply'])->name('apply');
Route::get('detail-recruitment/{id}',[RecruitmentController::class,'detail'])->name('detail_recruitment');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
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
    // Slider
    Route::prefix('slider')->name('slider.')->group(function(){
        Route::get('/insert',[SliderController::class,'insert'])->name('insert');
        Route::post('/insert',[SliderController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[SliderController::class,'update'])->name('update');
        Route::post('/update',[SliderController::class,'postUpdate'])->name('post-update');
        Route::post('/update-state/{id}',[SliderController::class,'updateState'])->name('update-state');
        Route::get('/delete/{id}',[SliderController::class,'delete'])->name('delete');
    });
    //Central Service
    Route::prefix('central-service')->name('central-service.')->group(function(){
        Route::get('/insert',[CentralServiceController::class,'insert'])->name('insert');
        Route::post('/insert',[CentralServiceController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[CentralServiceController::class,'update'])->name('update');
        Route::post('/update',[CentralServiceController::class,'postUpdate'])->name('post-update');
        Route::post('/update-state/{id}',[CentralServiceController::class,'updateState'])->name('update-state');
        Route::get('/delete/{id}',[CentralServiceController::class,'delete'])->name('delete');
    });
    //Post
    Route::prefix('post')->name('post.')->group(function(){
        Route::get('/',[AdminPostController::class,'indexAdmin'])->name('index');
        Route::get('/insert',[AdminPostController::class,'insert'])->name('insert');
        Route::post('/insert',[AdminPostController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[AdminPostController::class,'update'])->name('update');
        Route::post('/update',[AdminPostController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[AdminPostController::class,'delete'])->name('delete');
    });
     //Recruitment
     Route::prefix('recruitment')->name('recruitment.')->group(function(){
        Route::get('/',[AdminRecruitmentController::class,'index'])->name('index');
        Route::get('/detail/{id}',[AdminRecruitmentController::class,'detail'])->name('detail');
        Route::get('/insert',[AdminRecruitmentController::class,'insert'])->name('insert');
        Route::post('/insert',[AdminRecruitmentController::class,'postInsert'])->name('post-insert');
        Route::get('/update/{id}',[AdminRecruitmentController::class,'update'])->name('update');
        Route::post('/update',[AdminRecruitmentController::class,'postUpdate'])->name('post-update');
        Route::get('/delete/{id}',[AdminRecruitmentController::class,'delete'])->name('delete');
    });
     //Apply Work
     Route::prefix('apply-work')->name('apply-work.')->group(function(){
         Route::get('/detail/{id}',[ApplyWorkController::class,'detail'])->name('detail');
        Route::get('/delete/{id}',[ApplyWorkController::class,'delete'])->name('delete');
    });
});
