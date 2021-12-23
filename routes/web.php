<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PendonorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FaqController;

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

    Route::view('/welcome', "welcome")->name('welcome');

    //Route for pasien
    Route::view('/dashboard', "pages.pasien.dashboard")->name('dashboard');    
    Route::view('/stok-plasma-donor', "pages.pasien.stok-plasma-donor")->name('stok-plasma-donor');    
    Route::view('/permohonan', "pages.pasien.permohonan")->name('permohonan');
    Route::view('/faq-donor', "pages.pasien.faq")->name('faq');
    Route::view('/berita-donor', "pages.pasien.berita")->name('berita');
    Route::view('/user-profile', "pages.pasien.user-profile")->name('user-profile');
    Route::view('/change-password', "pages.pasien.change-password")->name('change-password');
    Route::view('/change-email', "pages.pasien.change-email")->name('change-email');
    Route::post('submit', [PasienController::class,'store']);

    //Route for pendonor
    Route::view('/dashboard-pendonor', "pages.pendonor.dashboard-pendonor")->name('dashboard-pendonor');
    // Route::view('/stok-plasma-pendonor', "pages.pendonor.stok-plasma-pendonor")->name('stok-plasma-pendonor');
    Route::view('/pendonor', "pages.pendonor.pendonor")->name('pendonor');
    Route::view('/faq-donor', "pages.pendonor.faq")->name('faq');
    Route::view('/berita-pendonor', "pages.pendonor.berita")->name('berita');
    Route::view('/user-profile-pendonor', "pages.pendonor.user-profile")->name('user-profile');
    Route::view('/change-password-pendonor', "pages.pendonor.change-password")->name('change-password');
    Route::view('/change-email-pendonor', "pages.pendonor.change-email")->name('change-email');

    Route::post('submit', [PendonorController::class,'store']);
    Route::post('/hospital/submit', [HospitalController::class,'store']);
    Route::post('/berita/submit', [BeritaController::class,'store']);
    Route::post('/faq/submit', [FaqController::class,'store']);

    
    Route::get('/stok-plasma-donor', [PendonorController::class, 'showPendonor'])->name('pendonor');
    Route::get('/user', [ UserController::class, "index" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::view('/dashboard-admin', "pages.user.dashboard-admin")->name('dashboard.admin');

    Route::get('/hospital', [ HospitalController::class, "show" ])->name('hospital');
    Route::view('/hospital/new', "pages.hospital.hospital-new")->name('hospital.new');
    Route::get('/hospital/edit/{hospitalId}', [ HospitalController::class, "edit" ]);
    Route::post('/hospital/update/{hospitalId}', [HospitalController::class, 'update']);
    Route::get('/hospital/delete/{hospitalId}', [ HospitalController::class, "destroy" ]);

    Route::get('/stok-plasma-pendonor', [ HospitalController::class, "showHospital" ])->name('hospital');
    Route::get('/stok-plasma-donor', [ HospitalController::class, "showHospitalPasien" ])->name('hospital');
    Route::get('/list-pendonor', [PendonorController::class, 'show'])->name('pendonor');

    Route::get('/berita', [ BeritaController::class, "show" ])->name('berita');
    Route::view('/berita/new', "pages.berita.berita-new")->name('berita.new');
    Route::get('/berita/edit/{beritaId}', [ BeritaController::class, "edit" ]);
    Route::post('/berita/update/{beritaId}', [ BeritaController::class, "update" ]);
    Route::get('/berita/delete/{beritaId}', [ BeritaController::class, "destroy" ]);
    Route::get('/berita-donor', [BeritaController::class, 'showBerita'])->name('berita');

    Route::get('/faq', [ FaqController::class, "show" ])->name('faq');
    Route::view('/faq/new', "pages.faq.faq-new")->name('faq.new');
    Route::get('/faq/edit/{faqId}', [ FaqController::class, "edit" ]);
    Route::post('/faq/update/{faqId}', [ FaqController::class, "update" ]);
    Route::get('/faq/delete/{faqId}', [ FaqController::class, "destroy" ]);
    Route::get('/faq-donor', [FaqController::class, 'showFaq'])->name('faq');
    
});
