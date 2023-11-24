<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::latest()->take(10)->get();

        return view('prestasi', ['prestasis' => $prestasi]);
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('detail-prestasi', [
            'prestasi' => $prestasi,
        ]);
    }
}
