<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
    return view('home');
});

Route::get('/spaces', function () {
    return view('spaces');
});
Route::get('/trans', [TransactionController::class, 'index'])->name('trans');
Route::post('/trans', [TransactionController::class, 'trans']);

Route::get('/payment/{id}', [TransactionController::class, 'paymentGet'])->name('payment');
Route::post('/payment/{id}', [TransactionController::class, 'payment']);
Route::get('/fin', function () {
    return view('pembayaranfin');
});

Route::get('/voucher', function () {
    return view('voucher');
});

Route::get('/cs', function () {
    return view('cs');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/booking', function () {
    return view('booking');
});