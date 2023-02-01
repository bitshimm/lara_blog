<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Admin;

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

Route::group(['prefix' => '/'],  function () {

    Route::get('/', [Main\MainController::class, 'index'])->name('main.index');

    Route::group(['prefix' => 'post'],  function () {
        Route::get('/', [Main\PostController::class, 'index'])->name('main.post.index');
        Route::get('/create', [Main\PostController::class, 'create'])->name('main.post.create');
        Route::post('/', [Main\PostController::class, 'store'])->name('main.post.store');
        Route::get('/{post}', [Main\PostController::class, 'show'])->name('main.post.show');
        Route::get('/{post}/edit', [Main\PostController::class, 'edit'])->name('main.post.edit');
        Route::patch('/{post}', [Main\PostController::class, 'update'])->name('main.post.update');
        Route::delete('/{post}', [Main\PostController::class, 'destroy'])->name('main.post.destroy');
    });
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'],  function () {

    Route::get('/', [Admin\AdminController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'post'],  function () {
        Route::get('/', [Admin\PostController::class, 'index'])->name('admin.post.index');
        Route::get('/create', [Admin\PostController::class, 'create'])->name('admin.post.create');
        Route::post('/', [Admin\PostController::class, 'store'])->name('admin.post.store');
        Route::get('/{post}', [Admin\PostController::class, 'show'])->name('admin.post.show');
        Route::get('/{post}/edit', [Admin\PostController::class, 'edit'])->name('admin.post.edit');
        Route::patch('/{post}', [Admin\PostController::class, 'update'])->name('admin.post.update');
        Route::delete('/{post}', [Admin\PostController::class, 'destroy'])->name('admin.post.destroy');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';