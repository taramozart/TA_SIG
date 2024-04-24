<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralPage;
use App\Http\Livewire\MapAdminDataBaru;
use App\Http\Livewire\MapDetailDokter;
use App\Http\Livewire\MapDokterEdit;
use App\Http\Livewire\MapDokterLihat;
use App\Http\Livewire\MapHome;
use App\Http\Livewire\MapLocation;
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



// MAP BOX ROUTE
Route::get('/map', MapLocation::class);
Route::get('/detail-dokter', MapDetailDokter::class);
Route::get('/home', MapHome::class);
Route::get('/', MapHome::class);
Route::get('/data-baru-dokter', MapAdminDataBaru::class);
Route::get('/kelola-data-dokter/lihat', MapDokterLihat::class);
Route::get('/kelola-data-dokter/edit', MapDokterEdit::class);
// MAP BOX ROUTE

// Route::get('/', function () {
//     return view('pages/landing-page/home/home');
// });
Route::get('/tes', function () {
    return view('tes');
});

Route::controller(GeneralPage::class) -> group(function () {
    // awal login
    Route::get('/login', 'login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp-password', 'otppassword');
    Route::get('/password-baru', 'passwordbaru');
    // akhir login
    // awal admin
    Route::get('/artikel-kesehatan', 'artikelkesehatan');
    Route::get('/buat-artikel', 'buatartikel');
    Route::get('/lihat-artikel', 'lihatartikel');
    Route::get('/edit-artikel', 'editartikel');

    // Awal Kelola Data Baru Dokter
    Route::get('/data-baru-dokter', 'databarudokter');
    // Akhir Kelola Data Baru Dokter

    Route::get('/data-pengajuan', 'datapengajuan');
    Route::get('/lihat-data-pengajuan-tambah', 'lihatdatapengajuantambah');
    Route::get('/lihat-data-pengajuan-ubah', 'lihatdatapengajuanubah');
    Route::get('/lihat-data-pengajuan-hapus', 'lihatdatapengajuanhapus');


    // Awal Kelola Data Dokter
    Route::get('/kelola-data-dokter', 'keloladatadokter');
    Route::get('/kelola-data-dokter/lihat', 'keloladatadokterlihat');
    Route::get('/kelola-data-dokter/edit', 'keloladatadokteredit');
    // Akhir Kelola Data Dokter

    Route::get('/pengajuan-dokter', 'pengajuandokter');
    Route::get('/lihat-pengajuan-dokter-tambah', 'lihatpengajuandoktertambah');
    Route::get('/lihat-pengajuan-dokter-ubah', 'lihatpengajuandokterubah');
    Route::get('/lihat-pengajuan-dokter-hapus', 'lihatpengajuandokterhapus');
    // akhir admin

});
