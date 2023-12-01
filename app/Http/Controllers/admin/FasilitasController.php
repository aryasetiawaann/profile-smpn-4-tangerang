<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use app\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', ['fasilitas' => $fasilitas]);
    }

    public function create()
    {
        return view('admin.fasilitas.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'name' => 'required|max:30',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload photo to public disk
        $path = $request->file('photo')->storePublicly('fasilitas_photos', 'public');
        $ext = $request->file('photo')->extension();

        // Save to database
        Fasilitas::create([
            'name' => $request->name,
            'photo' => $path,
        ]);

        return redirect()->route('admin.fasilitas.index');
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $photo = Storage::url($fasilitas->photo);
        return view('fasilitas.show', 
        [
            'fasilitas' => $fasilitas,
            'photo' => $photo
        ]);
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('admin.fasilitas.edit', ['fasilitas' => $fasilitas]);
    }

    public function update(Request $request, $id)
{
    // Validation
    $this->validate($request, [
        'name' => 'required',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the Fasilitas entry
    $fasilitas = Fasilitas::find($id);

    // Update the name
    $fasilitas->name = $request->name;

    // Check if a new photo is provided
    if ($request->hasFile('photo')) {
        // Delete the old photo if it exists
        if ($fasilitas->photo) {
            Storage::disk('public')->delete($fasilitas->photo);
        }

        // Upload the new photo
        $path = $request->file('photo')->storePublicly('fasilitas_photos', 'public');
        $fasilitas->photo = $path;
    }

    // Save changes to the database
    $fasilitas->save();

    // Redirect to the index page
    return redirect()->route('admin.fasilitas.index');
}


    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);

        // Delete photo from storage
        Storage::disk('public')->delete($fasilitas->photo);

        $fasilitas->delete();
        return redirect()->route('admin.fasilitas.index');
    }
}