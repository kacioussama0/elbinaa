<?php

use Illuminate\Support\Facades\Route;

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
    $guests = \App\Models\Category::where('slug','ضيوف-الشرف')->first()->files;
    return view('index',compact('guests'));
});

Route::view('/memory','memory');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('messages',\App\Http\Controllers\MessageController::class);
Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::resource('photos',\App\Http\Controllers\FilesController::class);
Route::post('upload-photo',[\App\Http\Controllers\FilesController::class,'uploadPhoto']);
Route::delete('revert',[\App\Http\Controllers\FilesController::class,'revert']);
Route::resource('admin/faq',\App\Http\Controllers\FaqController::class)->name('','faq');
Route::get('faq',function (){
    $faqs = \App\Models\Faq::all();
    return view('faq',compact('faqs'));
});
