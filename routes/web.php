<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/khachhang/danhsach', [CustomerController::class, 'index'])->name('customers');
Route::post('/khachhang/addCustomer',[CustomerController::class, 'addCustomer']);
Route::get('/khachhang/detailCustomer/{id}',[CustomerController::class, 'detailCustomer']);
Route::put('/khachhang/updateCustomer/{id}',[CustomerController::class, 'updateCustomer']);
Route::delete('/khachhang/deleteCustomer/{id}',[CustomerController::class, 'deleteCustomer']);

Route::get('/khachhang/lichsucuocgoi', function() {
    return view('khachhang.lichsucuocgoi');
})->name('dialog');
