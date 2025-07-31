<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function reguler()
    {
        return view('program.reguler'); // resources/views/pelatihan/reguler.blade.php
    }

    public function magang()
    {
        return view('program.magang'); // resources/views/pelatihan/magang.blade.php
    }

    public function sertifikasi()
    {
        return view('program.sertifikasi'); // resources/views/pelatihan/gratis.blade.php
    }

    public function profesi()
    {
        return view('program.profesi'); // resources/views/pelatihan/gratis.blade.php
    }

    public function coorporate()
    {
        return view('program.coorporate'); // resources/views/pelatihan/gratis.blade.php
    }
}

?>
