<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoanController;

// Public routes
Route::group(['prefix'=>'/user'],function(){
    Route::post("login",[AuthController::class,'login']);
    Route::post("register",[AuthController::class,'register']);
});

// Protected routes
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::post("/user/logout",[AuthController::class,'logout']);
    Route::get('/loan',[LoanController::class,'index']);
    Route::get('/loan/show/{id}', [LoanController::class, 'updateLoan']);
    Route::post('/loan/create', [LoanController::class, 'storeLoan']);
    Route::post('/loan/delete/{id}', [LoanController::class, 'deleteLoan']);
    Route::post('/loan/update/{id}', [LoanController::class, 'updateLoan']);
    Route::post('/loan/store-loan-history/{id}', [LoanController::class, 'updateLoan']);
});