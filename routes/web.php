<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\Admin\AdminController;


use App\Http\Controllers\Main\PostController;

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

Route::group([],  function () {
    Route::get('/posts', [PostController::class, 'index'])->name('main.post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('main.post.create');
    Route::post('/posts', [PostController::class, 'store'])->name('main.post.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('main.post.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('main.post.edit');
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('main.post.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('main.post.destroy');
});

Route::group(['prefix' => 'admin'],  function () {
    Route::get('/posts', [PostController::class, 'index'])->name('main.post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('main.post.create');
    Route::post('/posts', [PostController::class, 'store'])->name('main.post.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('main.post.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('main.post.edit');
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('main.post.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('main.post.destroy');
});
Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
