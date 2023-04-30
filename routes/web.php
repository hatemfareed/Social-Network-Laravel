<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\ControllerProfile;
use App\Http\Controllers\Groups\GroupsController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Posts\CommentsController ;
use App\Http\Controllers\Categories\CategoriesController;



use App\Http\Controllers\TestLog;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])
    ->name('auth.socilaite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])
    ->name('auth.socilaite.callback');

Route::get('/test',[TestLog::class ,'testuser'])->middleware('auth');
Route::get('/logout', [SocialLoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ControllerProfile::class , 'index'])->name('profile');
    Route::get('/profile/{user}', [ControllerProfile::class , 'show']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/categories', [CategoriesController::class , 'index'])->name('categories.index');; 
});

Route::middleware(['auth'])->group(function () {
    Route::get('/all-books', [GroupsController::class , 'index'])->name('all-books'); 
    Route::get('/book-page/{group}', [GroupsController::class , 'show']);
    Route::get('/book-member/{group}' , [GroupsController::class , 'member']) ;
    Route::get('/book-about/{group}' , [GroupsController::class , 'about']);
    Route::post('/store', [GroupsController::class , 'store']);                     //create groups
    Route::post('/group/{group}/join/{role?}' , [GroupsController::class , 'join']);
    Route::post('/group/{group}/leave' , [GroupsController::class , 'leave']) ;
});


Route::middleware(['auth'])->group(function(){
    Route::get('/posts', [PostsController::class , 'index'])->name('posts.index') ;
    Route::post('/post/{group}' , [PostsController::class , 'store']);
    Route::put('/post/{post}' , [PostsController::class , 'update']);
    Route::delete('/post/{post}' , [PostsController::class , 'destroy']);
    Route::post('/post/{post}/like' , [PostsController::class , 'like'])->name('posts.like');
});

Route::middleware(['auth'])->group(function(){
    Route::post('/comments/{post}' , [CommentsController::class , 'store']) ;
    Route::delete('/comments/{post}/{comment}' , [CommentsController::class , 'destroy']) ;
}) ;



// Route::get('auth/{provider}/user', [SocialController::class, 'index']);
