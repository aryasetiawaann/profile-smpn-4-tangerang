<?php
// app/Http/Controllers/PengajarController.php

namespace app\Http\Controllers;

use app\Http\Controllers\Controller;
use app\Models\Pengajar;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {
        $pengajars = Pengajar::all();
        
        return view('pengajar', ['pengajars' => $pengajars]);
    }
}