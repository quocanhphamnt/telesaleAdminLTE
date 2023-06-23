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
Route::get('index', function () {
    return view('index');
});
Route::get('customer', function () {
    return view('dashboard.customer');
});
Route::get('history', function () {
    return view('dashboard.history');
});
Route::get('graph-representation', function () {
    return view('dashboard.graph');
});
Route::get('calendar', function () {
    return view('calendar.calendar');
});
Route::get('mail', function () {
    return view('mail.mail');
});
Route::get('employee', function () {
    return view('management.employee');
});
Route::get('group', function () {
    return view('management.group');
});
Route::get('cusAssign', function () {
    return view('management.cusAssign');
});
