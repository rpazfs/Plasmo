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
    
    //Route for pasien
    Route::view('/dashboard', "pages.pasien.dashboard")->name('dashboard');    
    Route::view('/stok-plasma-donor', "pages.pasien.stok-plasma-donor")->name('stok-plasma-donor');    
    Route::view('/permohonan', "pages.pasien.permohonan")->name('permohonan');
    Route::view('/faq', "pages.pasien.faq")->name('faq');
    Route::view('/berita', "pages.pasien.berita")->name('berita');
    Route::view('/user-profile', "pages.pasien.user-profile")->name('user-profile');
    Route::view('/change-password', "pages.pasien.change-password")->name('change-password');
    Route::view('/change-email', "pages.pasien.change-email")->name('change-email');

    //Route for pendonor
    Route::view('/dashboard-pendonor', "pages.pendonor.dashboard-pendonor")->name('dashboard-pendonor');
    Route::view('/stok-plasma-pendonor', "pages.pendonor.stok-plasma-pendonor")->name('stok-plasma-pendonor');
    Route::view('/pendonor', "pages.pendonor.pendonor")->name('pendonor');
    Route::view('/faq-pendonor', "pages.pendonor.faq")->name('faq');
    Route::view('/berita-pendonor', "pages.pendonor.berita")->name('berita');
    Route::view('/user-profile-pendonor', "pages.pendonor.user-profile")->name('user-profile');
    Route::view('/change-password-pendonor', "pages.pendonor.change-password")->name('change-password');
    Route::view('/change-email-pendonor', "pages.pendonor.change-email")->name('change-email');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
