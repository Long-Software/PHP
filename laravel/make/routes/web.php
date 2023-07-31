<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profiles.index');
Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');
Route::post('/post', [PostsController::class, 'store'])->name('posts.store');
Route::get('/post/{post}',[PostsController::class, 'show'] )->name('posts.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profiles.update');
