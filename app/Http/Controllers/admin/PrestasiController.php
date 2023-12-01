<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('admin.prestasi.index', ['prestasi' => $prestasi]);
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'judul' => 'required|max:100',
            'tim' => 'required|max:50',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photo to public disk
        $path = $request->file('photo')->storePublicly('prestasi_photos', 'public');
        $ext = $request->file('photo')->extension();

        // Save to database
        Prestasi::create([
            'judul' => $request->judul,
            'tim' => $request->tim,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'photo' => $path,
        ]);

        return redirect()->route('admin.prestasi.index');
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $photo = Storage::url($prestasi->photo);
        return view('admin.prestasi.show', [
            'prestasi' => $prestasi,
            'photo' => $photo
        ]);
    }

    public function edit($id)
    {
        $prestasi = Prestasi::find($id);
        return view('admin.prestasi.edit', ['prestasi' => $prestasi]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'judul' => 'required|max:30', // Ganti name dengan judul
            'tim' => 'required|max:50',
            'deskripsi' => 'required',
            'tanggal' => 'nullable|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the prestasi entry
        $prestasi = Prestasi::find($id);

        // Update the judul, tim, deskripsi, and tanggal
        $prestasi->judul = $request->judul;
        $prestasi->tim = $request->tim; // Make sure to include 'tim' here
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->tanggal = $request->tanggal;


        // Check if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($prestasi->photo) {
                Storage::disk('public')->delete($prestasi->photo);
            }

            // Upload the new photo
            $path = $request->file('photo')->storePublicly('prestasi_photos', 'public');
            $prestasi->photo = $path;
        }

        // Save changes to the database
        $prestasi->save();

        // Redirect to the index page
        return redirect()->route('admin.prestasi.index');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($prestasi->photo);

        $prestasi->delete();
        return redirect()->route('admin.prestasi.index');
    }
}
