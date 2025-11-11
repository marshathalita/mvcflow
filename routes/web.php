<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailsController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Transaction;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Category', CategoryController::class);
Route::resource('Item', ItemController::class);
Route::resource('Transaction', TransactionController::class);
Route::resource('TransactionDetails', TransactionDetailsController::class);



    

 