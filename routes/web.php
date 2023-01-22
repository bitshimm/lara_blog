<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post;

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
    Route::get('/posts', Post\IndexController::class)->name('posts.index');
    Route::get('/posts/create', Post\CreateController::class)->name('posts.create');
    Route::post('/posts', Post\StoreController::class)->name('posts.store');
    Route::get('/posts/{post}', Post\ShowController::class)->name('posts.show');
    Route::get('/posts/{post}/edit', Post\EditController::class)->name('posts.edit');
    Route::patch('/posts/{post}', Post\UpdateController::class)->name('posts.update');
    Route::delete('/posts/{post}', Post\DestroyController::class)->name('posts.destroy');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');
