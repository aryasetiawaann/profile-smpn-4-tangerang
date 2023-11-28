<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::latest()->take(10)->get();

        return view('ekskul', ['ekskul' => $ekskul]);
    }

    public function show($id)
    {
        $ekskul = Ekskul::findOrFail($id);

        return view('detail-ekskul', [
            'ekskul' => $ekskul,
        ]);
    }
}
