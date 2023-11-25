<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class ekskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all();
        return view('ekskul', ['ekskul' => $ekskul]);
    }
}

