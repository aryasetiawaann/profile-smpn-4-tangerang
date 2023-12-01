<?php
// app/Http/Controllers/PengajarController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {
        $pengajars = Pengajar::all();
        
        return view('pengajar', ['pengajars' => $pengajars]);
    }
}