<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        $kalenders = Kalender::all();
        return view('kalender', compact('kalenders'));
    }
}
