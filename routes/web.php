<?php

use App\Http\Controllers\BankTransferSourceController;
use App\Http\Controllers\CashSourceController;
use App\Http\Controllers\CreditCardSourceController;
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
Route::get('/cash', [CashSourceController::class, 'index'])->name('cashindex');
Route::post('/cash-store', [CashSourceController::class, 'store'])->name('cashstore');


Route::get('/credit-card', [CreditCardSourceController::class, 'index'])->name('creditindex');
Route::post('/credit-card-store', [CreditCardSourceController::class, 'store'])->name('creditstore');


Route::get('/bank', [BankTransferSourceController::class, 'index'])->name('bankindex');
Route::post('/bank-store', [BankTransferSourceController::class, 'store'])->name('bankstore');
