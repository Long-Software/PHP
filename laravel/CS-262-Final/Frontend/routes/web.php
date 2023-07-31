<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowerController;

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

    return view('user_v2.master');
});

Route::get('/business', function () {

    return view('user_v2.business_loan');
});
Route::get('/student', function () {

    return view('user_v2.student_loan');
});
Route::get('/calculator', function () {

    return view('user_v2.calculator2');
});
Route::get('/signup', function () {

    return view('signup');
});

Route::get('/history', function () {

    return view('user_v2.loan_history');
});

Route::get('/packages', function () {

    return view('user_v2.loan_packages');
});

Route::get('/lenders', function () {

    return view('bank_v2.lenders');
});
Route::get('/request', function () {

    return view('user_v2.request_loan');
});

Route::get('/schedule', function () {

    return view('user_v2.payment_schedule');
});

Route::get('/bank/signup', function () {

    return view('bank_v2.bank_signup');
});
Route::get('/bank/signin', function () {

    return view('bank_v2.bank_signup');
});

Route::middleware('auth')->group(function () {
    // All User
    Route::get('/user', function () {
        //return view('welcome');
        return view('user_v2.master');
    })->name('index.borrower');

    Route::get('/bank', function () {
        //return view('welcome');
        return view('bank_v2.master_bank');
    })->name('index.bank');
    Route::get('/login', function () {
        return view('login');
    })->name('index.login');
    Route::post('/login', [UserController::class, 'login'])->name('store.login');

    //Borrower
    Route::get('/createUser', [UserController::class, 'createUser']);
    Route::post('/users', [UserController::class, 'storeUser'])->name('user.store');
    Route::post('/signup/bank', [UserController::class, 'storeBank'])->name('bank.store');
    Route::post('/signup/borrower', [UserController::class, 'storeBorrower'])->name('borrower.store');
    Route::get('/user/loan_listing', [LoanController::class, 'showLoan']);
    Route::get('/user/apply/{package_id}', [LoanController::class, 'confirmLoan']);

    //HERE IS THE ROUTE I USE FOR LOAN HISTORY
    Route::get('/loan/history', [LoanController::class, 'showLoanHistory'])->name('loan.history');
    Route::post('/loan/history', [LoanController::class, 'storeLoanHistory'])->name('storeLoanHistory');

    //Bank
    //Active loans (Edit and Delete)
    Route::get('/loan', [LoanController::class, 'index']);
    Route::get('/loan/create', [LoanController::class, 'createLoan']);
    Route::post('/loan', [LoanController::class, 'storeLoan'])->name('loan.store');
    Route::get('/loan/{package_id}/edit', [LoanController::class, 'editLoan'])->name('loan.edit');
    Route::patch('/loan/{package_id}', [LoanController::class, 'updateLoan'])->name('loan.update');
    Route::get('/loan/{package_id}/delete', [LoanController::class, 'deleteLoan'])->name('loan.delete');
    Route::get('/bank/borrowers', [BorrowerController::class, 'getBorrower']);
});

require __DIR__ . '/auth.php';
