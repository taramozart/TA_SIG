<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
     // Awal login
     function login () {
        return view('pages/dashboard/login');
    }
    function lupapassword () {
        return view('pages/dashboard/lupa-password');
    }
    function otppassword () {
        return view('pages/dashboard/otp-password');
    }
    function passwordbaru () {
        return view('pages/dashboard/password-baru');
    }
    // Akhir Login

    // Awal admin
    function artikelkesehatan () {
        return view('pages/dashboard/admin/artikel/artikel-kesehatan');
    }
    function buatartikel () {
        return view('pages/dashboard/admin/artikel/buat-artikel/buat-artikel');
    }
    function lihatartikel () {
        return view('pages/dashboard/admin/artikel/lihat-artikel/lihat-artikel');
    }
    function editartikel () {
        return view('pages/dashboard/admin/artikel/edit-artikel/edit-artikel');
    }
    // Awal Data Baru Dokter
    function databarudokter () {
        return view('pages/dashboard/admin/data-baru/data-baru-dokter');
    }
    // Akhir Data Baru Dokter

    function datapengajuan () {
        return view('pages/dashboard/admin/data-pengajuan/data-pengajuan');
    }
    function lihatdatapengajuantambah () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-tambah/lihat-data-pengajuan-tambah');
    }
    function lihatdatapengajuanubah () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-ubah/lihat-data-pengajuan-ubah');
    }
    function lihatdatapengajuanhapus () {
        return view('pages/dashboard/admin/data-pengajuan/lihat-hapus/lihat-data-pengajuan-hapus');
    }

    // Awal Kelola Data Dokter
    function keloladatadokter () {
        return view('pages/dashboard/admin/kelola-data/kelola-data-dokter');
    }
    function keloladatadokteredit () {
        return view('pages/dashboard/admin/kelola-data/edit/edit-kelola-dokter');
    }
    function keloladatadokterlihat () {
        return view('pages/dashboard/admin/kelola-data/lihat/lihat-kelola-dokter');
    }
    // Akhir Kelola Data Dokter


    function pengajuandokter () {
        return view('pages/dashboard/admin/pengajuan-dokter/pengajuan-dokter');
    }
    function lihatpengajuandoktertambah () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-tambah/lihat-pengajuan-dokter-tambah');
    }
    function lihatpengajuandokterubah () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-ubah/lihat-pengajuan-dokter-ubah');
    }
    function lihatpengajuandokterhapus () {
        return view('pages/dashboard/admin/pengajuan-dokter/lihat-hapus/lihat-pengajuan-dokter-hapus');
    }
    // Akhir admin
}