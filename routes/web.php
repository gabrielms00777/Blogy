<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/blog/{post:slug}', [SiteController::class, 'blogSingle'])->name('blog.single');
Route::get('/categoria/{category:name}', [SiteController::class, 'category'])->name('category');
// Route::get('/sobre', [SiteController::class, 'about'])->name('about');

Route::get('/contato', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::get('/contacts', [ContactController::class, 'show'])->name('contact.show');

    Route::resource('/category', CategoryController::class);

    Route::resource('/post', PostController::class);

    Route::resource('/comment', CommentController::class)->except('store');

    Route::put('/change/{comment}', [CommentController::class, 'change'])->name('comment.change');

    // Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
