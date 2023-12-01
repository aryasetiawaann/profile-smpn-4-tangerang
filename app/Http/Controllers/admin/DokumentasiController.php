<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Dokumentasi;

class DokumentasiController extends Controller
{
    public function index()
    {
        $dokumentasi = Dokumentasi::all();
        $dokumentasiKelas7 = Dokumentasi::where('kelas', 'kelas-7')->get();
        $dokumentasiKelas8 = Dokumentasi::where('kelas', 'kelas-8')->get();
        $dokumentasiKelas9 = Dokumentasi::where('kelas', 'kelas-9')->get();

        return view('admin.dokumentasi.index', compact('dokumentasi', 'dokumentasiKelas7', 'dokumentasiKelas8', 'dokumentasiKelas9'));
    }


    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|max:25',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kelas' => 'required', // Validasi pilihan kelas
        ]);

        $kelas = $request->kelas;

        $path = $request->file('photo')->storePublicly("dokumentasi_photos/{$kelas}", 'public');
        $ext = $request->file('photo')->extension();

        Dokumentasi::create([
            'judul' => $request->judul,
            'kelas' => $kelas,
            'photo' => $path,
        ]);

        return redirect()->route('admin.dokumentasi.index');
    }

    public function show($id)
    {
        $dokumentasi = Dokumentasi::findOrFail($id);
        $photo = Storage::url($dokumentasi->photo);
        return view('admin.dokumentasi.show', [
            'dokumentasi' => $dokumentasi,
            'photo' => $photo
        ]);
    }

    public function edit($id)
    {
        $dokumentasi = Dokumentasi::find($id);
        return view('admin.dokumentasi.edit', ['dokumentasi' => $dokumentasi]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'judul' => 'required|max:25',
            'kelas' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the dokumentasi entry
        $dokumentasi = Dokumentasi::find($id);

        // Update judul and tanggal
        $dokumentasi->judul = $request->judul;

        // Check if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($dokumentasi->photo) {
                Storage::disk('public')->delete($dokumentasi->photo);
            }

            // Ambil nilai kelas dari input form
            $kelas = $request->kelas;

            // Upload the new photo
            $path = $request->file('photo')->storePublicly("dokumentasi_photos/{$kelas}", 'public');
            $dokumentasi->photo = $path;
            $dokumentasi->kelas = $kelas;
        }

        // Save changes to the database
        $dokumentasi->save();

        // Redirect to the index page
        return redirect()->route('admin.dokumentasi.index');
    }

    public function destroy($id)
    {
        $dokumentasi = Dokumentasi::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($dokumentasi->photo);

        $dokumentasi->delete();
        return redirect()->route('admin.dokumentasi.index');
    }
}
