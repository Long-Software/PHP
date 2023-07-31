<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

// Admin Features: 4, 7
Route::middleware('auth')->group(function () {

    Route::controller(ViewController::class)->group(function () {

    // Admin Features: 8
        Route::get('/a/borrower', 'get_borrower')->name('borrower.index');
        Route::get('/a/bank', 'get_bank')->name('bank.index');
        Route::get('/a/loan', 'get_loan')->name('loan.index');
        Route::get('/a/admin', 'get_admin')->name('admin.index');

    // Admin Features: 9
        Route::get('/', 'index');
        Route::get('/a', 'index')->name('index');

    // Admin Features: 10
        Route::get('/a/admin/{address_id}', 'get_map')->name('view.map');
    });

    Route::controller(UserController::class)->group(function () {

    // Admin Features: 1
        Route::get('/a/verify/borrower', 'verify_borrower')->name('verify.borrower');
        Route::get('/a/verify/bank', 'verify_bank')->name('verify.bank');
        Route::get('/a/verify/{user_id}', 'verify_user')->name('verify.user');

    // Admin Features: 2
        Route::get('/a/{id}/edit', 'edit_user')->name('edit.user');
        Route::patch('/a/{id}', 'update_user')->name('update.user');

    // Admin Features: 3
        Route::delete('/a/{id}/delete', 'delete_user')->name('destory.user');

    // Admin Features: 11
        Route::get('/a/create', 'create_admin')->name('create.admin');
        Route::post('/a/create', 'store_admin')->name('store.admin');

    // Admin Features: 12
        Route::post('/a/find', 'find_user')->name('find.user');

        Route::get('/a/logout', 'destroy')->name('admin.logout');
    });

    Route::controller(ProfileController::class)->group(function () {

    // Admin Features: 5
        Route::get('/a/profile', 'profile')->name('admin.profile');

    // Admin Features: 6
        Route::get('/edit/profile', 'edit_profile')->name('edit.profile');
        Route::post('/a/profile', 'store_profile')->name('store.profile');
    });
});

require __DIR__ . '/auth.php';
