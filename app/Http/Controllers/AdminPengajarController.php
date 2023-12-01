<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Pengajar;

class AdminPengajarController extends Controller
{
    public function index()
    {
        $pengajars = Pengajar::all();
        return view('admin.pengajar.index', ['pengajars' => $pengajars]);
    }

    public function preview()
{
    $pengajars = Pengajar::take(5)->get();

    return view('admin.adm-home', ['pengajars' => $pengajars]);
}

    public function create()
    {
        return view('admin.pengajar.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'name' => 'required|max:50',
            'jabatan' => 'required|max:30',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photo to public disk
        $path = $request->file('photo')->storePublicly('pengajar_photos', 'public');
        $ext = $request->file('photo')->extension();

        // Save to database
        Pengajar::create([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'photo' => $path,
        ]);

        return redirect()->route('admin.pengajar.index');
    }

    public function show($id)
    {
        $pengajar = Pengajar::findOrFail($id);
        $photo = Storage::url($pengajar->photo);
        return view(
            'pengajar.show',
            [
                'pengajar' => $pengajar,
                'photo' => $photo
            ]
        );
    }

    public function edit($id)
    {
        $pengajar = Pengajar::find($id);
        return view('admin.pengajar.edit', ['pengajar' => $pengajar]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required|max:50',
            'jabatan' => 'required|max:30',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Find the entry
        $pengajar = Pengajar::find($id);

        // Update the name
        $pengajar->name = $request->name;

        // Check if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($pengajar->photo) {
                Storage::disk('public')->delete($pengajar->photo);
            }

            // Upload the new photo
            $path = $request->file('photo')->storePublicly('pengajar_photos', 'public');
            $pengajar->photo = $path;
        }

        // Save changes to the database
        $pengajar->save();

        // Redirect to the index page
        return redirect()->route('admin.pengajar.index');
    }


    public function destroy($id)
    {
        $pengajar = Pengajar::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($pengajar->photo);

        $pengajar->delete();
        return redirect()->route('admin.pengajar.index');
    }
}
