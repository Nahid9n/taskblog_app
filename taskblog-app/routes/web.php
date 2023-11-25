<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SponsoredBlogController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserBlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\ContactController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/categories/{id}',[WebsiteController::class,'category'])->name('category');
Route::get('/blogs',[WebsiteController::class,'blog'])->name('blogs');
Route::get('/blogs/detail/{id}',[WebsiteController::class,'blogDetails'])->name('blog.details');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');

Route::get('/user-login',[UserAuthController::class,'index'])->name('user.login');
Route::post('/user-login',[UserAuthController::class,'login'])->name('user.login');
Route::get('/user-register',[UserAuthController::class,'indexRegister'])->name('user.register');
Route::post('/user-register',[UserAuthController::class,'register'])->name('user.register');
Route::get('/user-logout',[UserAuthController::class,'logout'])->name('user-logout');

Route::middleware('users')->group(function (){
    Route::get('/user-dashboard', [UserController::class, 'dashboard'])->name('user-dashboard');
    Route::get('/user-profile', [UserController::class, 'profile'])->name('user-profile');
    Route::resource('userBlog', UserBlogController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('userProfile', UserProfileController::class);
    Route::resource('userContact', UserContactController::class);
//    Route::get('/user-feedback-add', [UserController::class, 'feedback'])->name('user-feedback-add');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/home', [AdminController::class,'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('sponsoredBlog', SponsoredBlogController::class);
    Route::resource('contacts', ContactController::class);
});


