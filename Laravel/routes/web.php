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
    return view('Index');
});

Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/Company', function () {
    return view('Company');
});
Route::get('/Services', function () {
    return view('Services');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/adminlogin');
});

Route::get('/admin-home', function () {
    return view('admin/home');
});

Route::get('/admin-user', function () {
    return view('admin/userlist');
});

Route::get('/admin-admin', function () {
    return view('admin/adminlist');
});

Route::get('/admin-Services', function () {
    return view('admin/Services');
});

Route::get('/admin-Order', function () {
    return view('admin/Order');
});


Route::get('/admin-edit-user', function () {
    return view('admin/edituser');
});

Route::get('/admin-edit-admin', function () {
    return view('admin/editadmin');
});

Route::get('/admin-edit-Services', function () {
    return view('admin/editServices');
});

Route::get('/admin-edit-Order', function () {
    return view('admin/editOrder');
});

Route::get('/admin-add-user', function () {
    return view('admin/adduser');
});

Route::get('/admin-add-admin', function () {
    return view('admin/addadmin');
});

Route::get('/admin-add-Services', function () {
    return view('admin/AddServices');
});

Route::get('/test', function () {
    return view('test');
});


