<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokumentasi;
use Illuminate\Http\Request;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        return view('dokumentasi', ['dokumentasi' => $dokumentasi]);
    }

    public function showByClass($kelas)
{
    $title = str_replace('-', ' ', $kelas);
    $dokumentasi = Dokumentasi::where('kelas', $kelas)->get();

    return view('dokumentasi', ['title' => $title, 'dokumentasi' => $dokumentasi]);
}


}

