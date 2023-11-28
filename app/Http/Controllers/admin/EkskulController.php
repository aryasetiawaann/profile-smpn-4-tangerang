<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    public function index()
    {
        $ekskul = Ekskul::all();
        return view('admin.ekskul.index', ['ekskul' => $ekskul]);
    }

    public function create()
    {
        return view('admin.ekskul.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'nama' => 'required|max:25', // Ganti name dengan nama
            'deskripsi' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photo to public disk
        $path = $request->file('photo')->storePublicly('ekskul_photo', 'public');
        $ext = $request->file('photo')->extension();

        // Save to database
        Ekskul::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'photo' => $path,
        ]);

        return redirect()->route('admin.ekskul.index');
    }

    public function show($id)
    {
        $ekskul = Ekskul::findOrFail($id);
        $photo = Storage::url($ekskul->photo);
        return view('admin.ekskul.show', [
            'ekskul' => $ekskul,
            'photo' => $photo
        ]);
    }

    public function edit($id)
    {
        $ekskul = Ekskul::find($id);
        return view('admin.ekskul.edit', ['ekskul' => $ekskul]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'nama' => 'required|max:25', // Ganti name dengan nama
            'deskripsi' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the ekskul entry
        $ekskul = Ekskul::find($id);

        // Update the nama, deskripsi, and tanggal
        $ekskul->nama = $request->nama;
        $ekskul->deskripsi = $request->deskripsi;

        // Check if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($ekskul->photo) {
                Storage::disk('public')->delete($ekskul->photo);
            }

            // Upload the new photo
            $path = $request->file('photo')->storePublicly('ekskul_photo', 'public');
            $ekskul->photo = $path;
        }

        // Save changes to the database
        $ekskul->save();

        // Redirect to the index page
        return redirect()->route('admin.ekskul.index');
    }

    public function destroy($id)
    {
        $ekskul = Ekskul::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($ekskul->photo);

        $ekskul->delete();
        return redirect()->route('admin.ekskul.index');
    }
}
