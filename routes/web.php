<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use Rap2hpoutre\FastExcel\FastExcel;


Route::view('/', 'welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


// Transaction Routes
Route::resource('transactions', TransactionController::class);

//Transaction Exports 
Route::get('/export-transactions', [TransactionController::class, 'exportTransactions'])->middleware('verified')->name('transactions.export');