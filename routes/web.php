<?php

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
Route::get('login', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.register');
});
Route::get('/', function () {
    return view('index');
});
Route::get('trangchu', function () {
    return view('index');
});
Route::get('customer', function () {
    return view('khachhang.danhsach');
});
Route::get('dialog', function () {
    return view('khachhang.lichsucuocgoi');
});
