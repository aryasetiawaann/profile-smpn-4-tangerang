<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = Visimisi::all();
        return view('admin.visimisi.index', ['visimisi'=> $visimisi]);
    }

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        Visimisi::create([
            'judul'=> $request->judul,
            'deskripsi'=> $request->deskripsi
        ]);

        return redirect()->route('admin.visimisi.index');
    }

    // public function show(string $id)
    // {
    //     //
    // }

    public function edit(string $id)
    {
        $visimisi = Visimisi::find($id);
        return view('admin.visimisi.edit', ['visimisi' => $visimisi]);
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'deskripsi'=> 'max:255',
        ]);
        $visimisi = Visimisi::find($id);
        $visimisi->deskripsi = $request->deskripsi;
        $visimisi->save();

        return redirect()->route('admin.visimisi.index');
    }

    // public function destroy(string $id)
    // {
    //     //
    // }
}
