<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;

class AdminAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.announcement.index', ['announcements' => $announcements]);
    }

    public function create()
    {
        return view('admin.announcement.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'judul' => 'required|max:100', // Ganti name dengan judul
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photo to public disk
        $path = $request->file('photo')->storePublicly('announcement_photos', 'public');
        $ext = $request->file('photo')->extension();

        // Save to database
        Announcement::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'photo' => $path,
        ]);

        return redirect()->route('admin.announcement.index');
    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        $photo = Storage::url($announcement->photo);
        return view('admin.announcement.show', [
            'announcement' => $announcement,
            'photo' => $photo
        ]);
    }

    public function edit($id)
    {
        $announcement = Announcement::find($id);
        return view('admin.announcement.edit', ['announcement' => $announcement]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'judul' => 'required|max:100', // Ganti name dengan judul
            'deskripsi' => 'required',
            'tanggal' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the announcement entry
        $announcement = Announcement::find($id);

        // Update the judul, deskripsi, and tanggal
        $announcement->judul = $request->judul;
        $announcement->deskripsi = $request->deskripsi;
        $announcement->tanggal = $request->tanggal;

        // Check if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($announcement->photo) {
                Storage::disk('public')->delete($announcement->photo);
            }

            // Upload the new photo
            $path = $request->file('photo')->storePublicly('announcement_photos', 'public');
            $announcement->photo = $path;
        }

        // Save changes to the database
        $announcement->save();

        // Redirect to the index page
        return redirect()->route('admin.announcement.index');
    }

    public function destroy($id)
    {
        $announcement = Announcement::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($announcement->photo);

        $announcement->delete();
        return redirect()->route('admin.announcement.index');
    }
}
