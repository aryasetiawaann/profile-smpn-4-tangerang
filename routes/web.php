<?php

use Illuminate\Support\Facades\Route;
//VISITOR
use App\Http\Controllers\FasilitasController as VisitorFasilitasController;

//ADMIN
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;

Route::get('/', function () {
    return view('home', ['title'=> 'Home']);
});


Route::get('/sejarah-sekolah', function () {
    return view('sejarah', ['title'=> 'Sejarah Sekolah']);
});

Route::get('/staff-pengajar', function () {
    return view('pengajar', ['title'=> 'Staff Pengajar']);
});

Route::get('/ekstrakulikuler', function () {
    return view('ekskul', ['title'=> 'Ekstrakulikuler']);
});

Route::get('/kalender-akademik', function () {
    return view('kalender', ['title'=> 'Kalender Akademik']);
});

Route::get('/prestasi', function () {
    return view('prestasi', ['title'=> 'Prestasi']);
});

Route::get('/pengumuman-dan-berita', function () {
    return view('pengumuman', ['title'=> 'Pengumuman dan Berita']);
});

Route::get('/fasilitas-sekolah', function () {
    return view('fasilitas', ['title'=> 'Fasilitas Sekolah']);
});

// Isi ID atau judul beritanya aja
Route::get('/pengumuman-dan-berita/id', function () {
    return view('detail-pengumuman', ['title'=> 'judul pengumumannya']);
});


// contoh: kelas-8
Route::get('/dokumentasi/{kelas}', function ($kelas) {
    $title = str_replace('-',' ', $kelas);

    return view('dokumentasi', ['title'=> $title]);
});


// --- BAGIAN ADMIN ---

Route::get('/admin', function () {
    return view('adm-home', ['title'=> 'Home']);
});

Route::get('/admin/pengumuman', function () {
    return view('adm-pengumuman', ['title'=> 'Pengumuman']);
});

Route::get('/admin/pengumuman/edit', function () {
    return view('adm-editPengumuman', ['title'=> 'Edit Pengumuman']);
});

Route::get('/admin/pengajar', function () {
    return view('adm-pengajar', ['title'=> 'Pengajar']);
});

Route::get('/admin/pengajar/edit', function () {
    return view('adm-editPengajar', ['title'=> 'Edit Pengajar']);
});

Route::get('/admin/ekskul', function () {
    return view('adm-ekskul', ['title'=> 'Ekskul']);
});

Route::get('/admin/ekskul/edit', function () {
    return view('adm-editEkskul', ['title'=> 'Edit Ekskul']);
});

Route::get('/admin/dokumentasi', function () {
    return view('adm-dokumentasi', ['title'=> 'Dokumentasi']);
});

Route::get('/admin/dokumentasi/edit', function () {
    return view('adm-editDokumentasi', ['title'=> 'Edit Dokumentasi']);
});

Route::get('/admin/prestasi', function () {
    return view('adm-prestasi', ['title'=> 'Prestasi']);
});

Route::get('/admin/prestasi/edit', function () {
    return view('adm-editPrestasi', ['title'=> 'Edit Prestasi']);
});

Route::get('/admin/kalender', function () {
    return view('adm-kalender', ['title'=> 'Kalender']);
});

Route::get('/admin/kalender/edit', function () {
    return view('adm-editKalender', ['title'=> 'Edit Kalender']);
});

//fasilitas-ADMIN
Route::resource('admin/fasilitas', AdminFasilitasController::class)->names([
    'index' => 'admin.fasilitas.index',
    'create' => 'admin.fasilitas.create',
    'store' => 'admin.fasilitas.store',
    'edit' => 'admin.fasilitas.edit',
    'update' => 'admin.fasilitas.update',
    'destroy' => 'admin.fasilitas.destroy',
]);

//fasilitas-VISITOR
Route::get('/fasilitas-sekolah', [VisitorFasilitasController::class, 'index'])->name('fasilitas.index');
