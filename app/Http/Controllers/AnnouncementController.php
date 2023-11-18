<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Announcement; // Ganti Pengumuman dengan Announcement

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->take(10)->get();

        return view('pengumuman', ['announcements' => $announcements]);
    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);

        return view('detail-pengumuman', [
            'announcement' => $announcement,
        ]);
    }
}
