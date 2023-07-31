<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\TourController;

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
// A default route to get all the tour
Route::get('/tour', [TourController::class, 'index'])->name('tour.index');
// A route that connnect to the creating tour package form
Route::get('/tour/create', [TourController::class, 'create'])->name('tour.create');
// A route that insert tour package data into the database
Route::post('/tour', [TourController::class, 'store'])->name('tour.store');
// A route that connect to the editing tour package form
Route::get('/tour/{id}/edit', [TourController::class, 'edit'])->name('tour.edit');
// A route that update tour package data in the database with an id
Route::patch('/tour/{id}', [TourController::class, 'update'])->name('tour.update');
// A route that delete tour package data in the database with an id
Route::delete('/tour/{id}', [TourController::class, 'delete'])->name('tour.delete');