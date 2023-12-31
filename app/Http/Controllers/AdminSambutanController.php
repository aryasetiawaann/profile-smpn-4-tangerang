<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class AdminSambutanController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::all();
        return view('admin.sambutan.index', ['sambutan' => $sambutan]);
    }

    public function create()
    {
        return view('admin.sambutan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'namakepsek' => 'required|max:100',
            'deskripsi' => 'required|string|min:200|max:1050',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $path = $request->file('photo')->storePublicly('sambutan_photos', 'public');

        Sambutan::create([
            'namakepsek' => $request->namakepsek,
            'deskripsi' => $request->deskripsi,
            'photo' => $path,
        ]);

        return redirect()->route('admin.sambutan.index');
    }

    public function edit(string $id)
    {
        $sambutan = Sambutan::find($id);
        return view('admin.sambutan.edit', ['sambutan' => $sambutan]);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'namakepsek' => 'max:100',
            'deskripsi' => 'string|min:200|max:1050',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $sambutan = Sambutan::find($id);

        $sambutan->namakepsek = $request->namakepsek;
        $sambutan->deskripsi = $request->deskripsi; 

        if ($request->hasFile('photo')) {
            if ($sambutan->photo) {
                Storage::disk('public')->delete($sambutan->photo);
            }
            $path = $request->file('photo')->storePublicly('sambutan_photos', 'public');
            $sambutan->photo = $path;
        }
        $sambutan->save();
        return redirect()->route('admin.sambutan.index');
    }
}
