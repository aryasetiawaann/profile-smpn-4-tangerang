<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use app\Models\Kalender;

class KalenderController extends Controller
{
    public function index()
    {
        $kalenders = Kalender::all();
        return view('admin.kalender.index', ['kalenders' => $kalenders]);
    }

    public function create()
    {
        return view('admin.kalender.create');
    }

    public function store(Request $request)
    {
        // FORM VALIDATION
        $this->validate($request, [
            'title' => 'required|max:255',
            'file' => 'required|mimes:pdf', // Adjust the file type as needed
        ]);

        // Upload file to public disk
        $path = $request->file('file')->storePublicly('kalender_files', 'public');
        
        // Save to database
        Kalender::create([
            'title' => $request->title,
            'file_path' => $path,
        ]);

        return redirect()->route('admin.kalender.index');
    }

    public function show($id)
    {
        $kalender = Kalender::findOrFail($id);
        $file = Storage::url($kalender->file_path);
        return view('admin.kalender.show', [
            'kalender' => $kalender,
            'file' => $file
        ]);
    }

    public function edit($id)
    {
        $kalender = Kalender::find($id);
        return view('admin.kalender.edit', ['kalender' => $kalender]);
    }

    public function update(Request $request, $id)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required|max:255',
            'file' => 'nullable|mimes:pdf', // Adjust the file type as needed
        ]);

        // Find the kalender entry
        $kalender = Kalender::find($id);

        // Update the title
        $kalender->title = $request->title;

        // Check if a new file is provided
        if ($request->hasFile('file')) {
            // Delete the old file if it exists
            if ($kalender->file_path) {
                Storage::disk('public')->delete($kalender->file_path);
            }

            // Upload the new file
            $path = $request->file('file')->storePublicly('kalender_files', 'public');
            $kalender->file_path = $path;
        }

        // Save changes to the database
        $kalender->save();

        // Redirect to the index page
        return redirect()->route('admin.kalender.index');
    }

    public function destroy($id)
    {
        $kalender = Kalender::find($id);

        // Delete file from storage
        Storage::disk('public')->delete($kalender->file_path);

        $kalender->delete();
        return redirect()->route('admin.kalender.index');
    }
}
