<?php

use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/stok-plasma', function () {
    return view('stok-plasma');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/daftar-donor', function () {
    return view('daftar-donor');
});

Route::get('/daftar-pendonor', function () {
    return view('daftar-pendonor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard-pendonor', function () {
    return view('dashboard-pendonor');
});

Route::get('/stok-plasma-donor', function () {
    return view('stok-plasma-donor');
});

Route::get('/stok-plasma-pendonor', function () {
    return view('stok-plasma-pendonor');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/change-email', function () {
    return view('change-email');
});

Route::get('/permohonan', function () {
    return view('permohonan');
});

Route::get('/pendonor', function () {
    return view('pendonor');
});


Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    // Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
