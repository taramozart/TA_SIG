<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{

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
}