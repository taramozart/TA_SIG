<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralPage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/login/admin', function () {
//     return view('login.admin');
// })->name('/login/admin');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/data-baru-dokter', function () {
    return view('admin.data-baru-dokter');
})->name('/admin/data-baru-dokter');

Route::get('/admin/kelola-data-dokter', function () {
    return view('admin.kelola-data-dokter');
})->name('/admin/kelola-data-dokter');

Route::get('/admin/pengajuan-dokter', function () {
    return view('admin.pengajuan-dokter');
})->name('/admin/pengajuan-dokter');

Route::get('/admin/data-pengajuan', function () {
    return view('admin.data-pengajuan');
})->name('/admin/data-pengajuan');

Route::get('/admin/artikel-kesehatan', function () {
    return view('admin.artikel-kesehatan');
})->name('/admin/artikel-kesehatan');



Route::controller(GeneralPage::class) -> group(function () {
    Route::get('/login', 'login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp-password', 'otppassword');
    Route::get('/password-baru', 'passwordbaru');
});