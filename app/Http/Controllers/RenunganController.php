<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenunganController extends Controller
{
    public function indexAnak() {


        return view('user.renungan.anak');
    }
}
