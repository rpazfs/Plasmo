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




Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');
    Route::view('/dashboard-pendonor', "dashboard-pendonor")->name('dashboard-pendonor');
    Route::view('/stok-plasma-pendonor', "stok-plasma-pendonor")->name('stok-plasma-pendonor');
    Route::view('/stok-plasma-donor', "stok-plasma-donor")->name('stok-plasma-donor');
    Route::view('/pendonor', "pendonor")->name('pendonor');
    Route::view('/permohonan', "permohonan")->name('permohonan');
    Route::view('/faq', "faq")->name('faq');
    Route::view('/berita', "berita")->name('berita');
    Route::view('/user-profile', "user-profile")->name('user-profile');
    Route::view('/change-password', "change-password")->name('change-password');
    Route::view('/change-email', "change-email")->name('change-email');
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
