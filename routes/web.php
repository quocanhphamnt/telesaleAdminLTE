<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
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

Route::get('/khachhang', function () {
    return redirect('/khachhang/danhsach');
});
Route::get('/khachhang/danhsach', [CustomerController::class, 'index'])->name('customers');
Route::post('/khachhang/addCustomer',[CustomerController::class, 'addCustomer']);
Route::get('/khachhang/detailCustomer/{id}',[CustomerController::class, 'detailCustomer']);
Route::put('/khachhang/updateCustomer/{id}',[CustomerController::class, 'updateCustomer']);
Route::delete('/khachhang/deleteCustomer/{id}',[CustomerController::class, 'deleteCustomer']);

Route::get('/quanly', function () {
    return redirect('/quanly/nhanvien');
});
Route::get('/quanly/nhanvien', [UserController::class, 'index'])->name('users');
Route::post('/quanly/addUser',[UserController::class, 'addUser']);
Route::get('/quanly/detailUser/{id}',[UserController::class, 'detailUser']);
Route::put('/quanly/updateUser/{id}',[UserController::class, 'updateUser']);
Route::delete('/quanly/deleteUser/{id}',[UserController::class, 'deleteUser']);

Route::get('/quanly/nhom', [GroupController::class, 'index'])->name('groups');
Route::post('/quanly/addGroup',[GroupController::class, 'addGroup']);
Route::get('/quanly/detailGroup/{id}',[GroupController::class, 'detailGroup']);
Route::put('/quanly/updateGroup/{id}',[GroupController::class, 'updateGroup']);
Route::delete('/quanly/deleteGroup/{id}',[GroupController::class, 'deleteGroup']);
