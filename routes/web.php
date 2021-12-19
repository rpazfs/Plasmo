<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendonorController;

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

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:Pencari Donor', 'prefix' => 'Pencari Donor', 'as' => 'Pencari Donor.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\PasienController::class);
    });
   Route::group(['middleware' => 'role:Pendonor', 'prefix' => 'Pendonor', 'as' => 'Pendonor.'], function() {
       Route::resource('dashboard', \App\Http\Controllers\PendonorController::class);
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
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
    Route::post('submit', [PasienController::class,'store']);

    //Route for pendonor
    Route::view('/dashboard-pendonor', "pages.pendonor.dashboard-pendonor")->name('dashboard-pendonor');
    Route::view('/stok-plasma-pendonor', "pages.pendonor.stok-plasma-pendonor")->name('stok-plasma-pendonor');
    Route::view('/pendonor', "pages.pendonor.pendonor")->name('pendonor');
    Route::view('/faq-pendonor', "pages.pendonor.faq")->name('faq');
    Route::view('/berita-pendonor', "pages.pendonor.berita")->name('berita');
    Route::view('/user-profile-pendonor', "pages.pendonor.user-profile")->name('user-profile');
    Route::view('/change-password-pendonor', "pages.pendonor.change-password")->name('change-password');
    Route::view('/change-email-pendonor', "pages.pendonor.change-email")->name('change-email');
    Route::post('submit', [PendonorController::class,'store']);
    Route::get('pendonor', [PendonorController::class, 'getPendonor']);

    Route::get('/user', [ UserController::class, "index" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::view('/dashboard-admin', "pages.user.dashboard-admin")->name('dashboard.admin');
});
