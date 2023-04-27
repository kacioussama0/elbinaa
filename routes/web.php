<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\SiteController::class,'home']);

Route::view('/memory','memory');

Route::get('/posts/{slug}',[\App\Http\Controllers\SiteController::class,'post']);
Route::get('/album',[\App\Http\Controllers\SiteController::class,'album']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('upload-photo',[\App\Http\Controllers\FilesController::class,'uploadPhoto']);
Route::delete('revert',[\App\Http\Controllers\FilesController::class,'revert']);
Route::resource('admin/faq',\App\Http\Controllers\FaqController::class)->name('','faq');
Route::get('faq',function (){
    $faqs = \App\Models\Faq::all();
    return view('faq',compact('faqs'));
});

Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('messages',\App\Http\Controllers\MessageController::class);
Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::resource('photos',\App\Http\Controllers\PhotoController::class);
Route::prefix("admin")->group(function () {

});
