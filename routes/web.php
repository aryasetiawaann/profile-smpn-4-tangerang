<?php

use Illuminate\Support\Facades\Route;
//VISITOR
use App\Http\Controllers\FasilitasController as VisitorFasilitasController;
use App\Http\Controllers\AnnouncementController as VisitorAnnouncementController;
use App\Http\Controllers\KalenderController as VisitorKalenderController;
use App\Http\Controllers\PrestasiController as VisitorPrestasiController;
use App\Http\Controllers\SambutanController as VisitorSambutanController;
use App\Http\Controllers\VisimisiController as VisitorVisimisiController;

//ADMIN
use App\Http\Controllers\Admin\FasilitasController as AdminFasilitasController;
use App\Http\Controllers\Admin\AnnouncementController as AdminAnnouncementController;
use App\Http\Controllers\Admin\KalenderController as AdminKalenderController;   
use App\Http\Controllers\Admin\PrestasiController as AdminPrestasiController;
use App\Http\Controllers\Admin\SambutanController as AdminSambutanController;
use App\Http\Controllers\Admin\VisimisiController as AdminVisimisiController;

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

Route::get('/ekstrakulikuler/id', function () {
    return view('detail-ekskul', ['title'=> 'Nama Ekskul']);
});

// contoh: kelas-8
Route::get('/dokumentasi/{kelas}', function ($kelas) {
    $title = str_replace('-',' ', $kelas);

    return view('dokumentasi', ['title'=> $title]);
});

Route::get('admin/login', function () {
    return view('admin.login');
});


// --- BAGIAN ADMIN ---

Route::get('/admin', function () {
    return view('adm-home', ['title'=> 'Home']);
});

// Route::get('/admin/pengumuman', function () {
//     return view('adm-pengumuman', ['title'=> 'Pengumuman']);
// });

// Route::get('/admin/pengumuman/edit', function () {
//     return view('adm-editPengumuman', ['title'=> 'Edit Pengumuman']);
// });

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

// Route::get('/admin/prestasi', function () {
//     return view('adm-prestasi', ['title'=> 'Prestasi']);
// });

// Route::get('/admin/prestasi/edit', function () {
//     return view('adm-editPrestasi', ['title'=> 'Edit Prestasi']);
// });

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


Route::resource('admin/announcement', AdminAnnouncementController::class)->names([
    'index' => 'admin.announcement.index',
    'create' => 'admin.announcement.create',
    'store' => 'admin.announcement.store',
    'edit' => 'admin.announcement.edit',
    'update' => 'admin.announcement.update',
    'destroy' => 'admin.announcement.destroy',
]);

// Admin Prestasi routes
Route::resource('admin/prestasi', AdminPrestasiController::class)->names([
    'index' => 'admin.prestasi.index',
    'create' => 'admin.prestasi.create',
    'store' => 'admin.prestasi.store',
    'edit' => 'admin.prestasi.edit',
    'update' => 'admin.prestasi.update',
    'destroy' => 'admin.prestasi.destroy',
]);

// ... other admin routes

// --- BAGIAN VISITOR ---

// Visitor Pengumuman routes
Route::get('/pengumuman-dan-berita', [VisitorAnnouncementController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman-dan-berita/{id}', [VisitorAnnouncementController::class, 'show'])->name('detail-pengumuman.index');

// Visitor Prestasi routes
Route::get('/prestasi', [VisitorPrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{id}', [VisitorPrestasiController::class, 'show'])->name('detail-prestasi.index');





//kalender-ADMIN
Route::resource('admin/kalender', AdminKalenderController::class)->names([
    'index' => 'admin.kalender.index',
    'create' => 'admin.kalender.create',
    'store' => 'admin.kalender.store',
    'edit' => 'admin.kalender.edit',
    'update' => 'admin.kalender.update',
    'destroy' => 'admin.kalender.destroy',
]);

//kalender-VISITOR
Route::get('/kalender-akademik', [VisitorKalenderController::class, 'index'])->name('kalender.index');

//Sambutan-VISITOR
// Route::get('/', [VisitorSambutanController::class, 'index'])->name('home.index');

//Sambutan-ADMIN
Route::resource('/admin/sambutan', AdminSambutanController::class)->names([
    'index' => 'admin.sambutan.index',
    'create' => 'admin.sambutan.create',
    'store' => 'admin.sambutan.store',
    'edit' => 'admin.sambutan.edit',
    'update' => 'admin.sambutan.update',
    'destroy' => 'admin.sambutan.destroy',
]);

//Visimisi-VISITOR

//Visimisi-ADMIN

Route::resource('/admin/visimisi', AdminVisimisiController::class)->names([
    'index' => 'admin.visimisi.index',
    'create' => 'admin.visimisi.create',
    'store' => 'admin.visimisi.store',
    'edit' => 'admin.visimisi.edit',
    'update' => 'admin.visimisi.update',
    'destroy' => 'admin.visimisi.destroy',
]);