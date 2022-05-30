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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search_company', function () {
    return view('company_and_staff.search_company');
});

Route::get('/search_staff', function () {
    return view('company_and_staff.search_staff');
});

Route::get('/area', function () {
    return view('company_and_staff.area_monitor');
});

Route::get('/status', function () {
    return view('company_and_staff.company_bystatus');
});

Route::get('/user', function () {
    return view('company_and_staff.user_byid');
});

Route::get('/register_new', function () {
    return view('register_new_company.company_registration');
});


