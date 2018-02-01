<?php

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

//route of Login load
Route::get('/', function () {
    return view('administrator.login');
})->name('login');

//route of Register load
Route::get('/register', function () {
    return view('administrator.register');
})->name('register');

//route of Dashboard load
Route::get('/admin/dashboard', function () {
    return view('administrator.dashboard');
})->name('dashboard');

//route of Order load
Route::get('/admin/orders', function () {
    return view('administrator.pages.order');
})->name('order');


//route of Edit Details load
Route::get('/admin/editDetails', function () {
    return view('administrator.pages.edit');
})->name('edit');


//route of Estimate Details load
Route::get('/admin/estimateDetails', function () {
    return view('administrator.pages.estimate');
})->name('estimate');


//route of Email load
Route::get('/admin/email', function () {
    return view('administrator.pages.email');
})->name('email');


//route of Quick Pay load
Route::get('/admin/quickpay', function () {
    return view('administrator.pages.quickpay');
})->name('quickpay');


//route of Tickets load
Route::get('/admin/tickets', function () {
    return view('administrator.pages.tickets');
})->name('tickets');