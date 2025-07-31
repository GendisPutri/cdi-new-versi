<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function kirim(Request $request)
    {
        // validasi dan proses kirim pesan (belum diisi)
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
?>