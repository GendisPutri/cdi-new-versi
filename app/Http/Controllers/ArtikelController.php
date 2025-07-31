<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel.artikel');
    }

    public function show($slug)
{
    $artikel = Artikel::where('slug', $slug)->firstOrFail(); 

    return view('artikel.detail', compact('artikel')); 
}
}
?>