<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasilitasController as VisitorFasilitasController;
use App\Http\Controllers\AnnouncementController as VisitorAnnouncementController;
use App\Http\Controllers\KalenderController as VisitorKalenderController;
use App\Http\Controllers\PrestasiController as VisitorPrestasiController;
use App\Http\Controllers\SambutanController as VisitorSambutanController;
use App\Http\Controllers\VisimisiController as VisitorVisimisiController;
use App\Http\Controllers\PengajarController as VisitorPengajarController;
use App\Http\Controllers\EkskulController as VisitorEkskulController;
use App\Http\Controllers\DokumentasiController as VisitorDokumentasiController;
use App\Http\Controllers\AdminFasilitasController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\AdminKalenderController;
use App\Http\Controllers\AdminPrestasiController;
use App\Http\Controllers\AdminSambutanController;
use App\Http\Controllers\AdminVisimisiController;
use App\Http\Controllers\AdminPengajarController;
use App\Http\Controllers\AdminEkskulController;
use App\Http\Controllers\AdminDokumentasiController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/sejarah-sekolah', function () {
    return view('sejarah', ['title' => 'Sejarah Sekolah']);
});

// --- BAGIAN ADMIN ---

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.adm-home', ['title' => 'Home']);
    })->name('admin.home');

    Route::get('/admin', [AdminPengajarController::class, 'preview'])->name('admin.adm-home');

    Route::resource('admin/fasilitas', AdminFasilitasController::class)->names([
        'index' => 'admin.fasilitas.index',
        'create' => 'admin.fasilitas.create',
        'store' => 'admin.fasilitas.store',
        'edit' => 'admin.fasilitas.edit',
        'update' => 'admin.fasilitas.update',
        'destroy' => 'admin.fasilitas.destroy',
    ]);

    Route::resource('admin/announcement', AdminAnnouncementController::class)->names([
        'index' => 'admin.announcement.index',
        'create' => 'admin.announcement.create',
        'store' => 'admin.announcement.store',
        'edit' => 'admin.announcement.edit',
        'update' => 'admin.announcement.update',
        'destroy' => 'admin.announcement.destroy',
    ]);

    Route::resource('admin/prestasi', AdminPrestasiController::class)->names([
        'index' => 'admin.prestasi.index',
        'create' => 'admin.prestasi.create',
        'store' => 'admin.prestasi.store',
        'edit' => 'admin.prestasi.edit',
        'update' => 'admin.prestasi.update',
        'destroy' => 'admin.prestasi.destroy',
    ]);

    Route::resource('admin/kalender', AdminKalenderController::class)->names([
        'index' => 'admin.kalender.index',
        'create' => 'admin.kalender.create',
        'store' => 'admin.kalender.store',
        'edit' => 'admin.kalender.edit',
        'update' => 'admin.kalender.update',
        'destroy' => 'admin.kalender.destroy',
    ]);

    Route::resource('/admin/sambutan', AdminSambutanController::class)->names([
        'index' => 'admin.sambutan.index',
        'create' => 'admin.sambutan.create',
        'store' => 'admin.sambutan.store',
        'edit' => 'admin.sambutan.edit',
        'update' => 'admin.sambutan.update',
        'destroy' => 'admin.sambutan.destroy',
    ]);

    Route::resource('/admin/visimisi', AdminVisimisiController::class)->names([
        'index' => 'admin.visimisi.index',
        'create' => 'admin.visimisi.create',
        'store' => 'admin.visimisi.store',
        'edit' => 'admin.visimisi.edit',
        'update' => 'admin.visimisi.update',
        'destroy' => 'admin.visimisi.destroy',
    ]);

    Route::resource('admin/pengajar', AdminPengajarController::class)->names([
        'index' => 'admin.pengajar.index',
        'create' => 'admin.pengajar.create',
        'store' => 'admin.pengajar.store',
        'edit' => 'admin.pengajar.edit',
        'update' => 'admin.pengajar.update',
        'destroy' => 'admin.pengajar.destroy',
    ]);

    Route::resource('admin/ekskul', AdminEkskulController::class)->names([
        'index' => 'admin.ekskul.index',
        'create' => 'admin.ekskul.create',
        'store' => 'admin.ekskul.store',
        'edit' => 'admin.ekskul.edit',
        'update' => 'admin.ekskul.update',
        'destroy' => 'admin.ekskul.destroy',
    ]);

    Route::resource('admin/dokumentasi', AdminDokumentasiController::class)->names([
        'index' => 'admin.dokumentasi.index',
        'create' => 'admin.dokumentasi.create',
        'store' => 'admin.dokumentasi.store',
        'edit' => 'admin.dokumentasi.edit',
        'update' => 'admin.dokumentasi.update',
        'destroy' => 'admin.dokumentasi.destroy',
    ]);
});

// --- BAGIAN VISITOR ---

Route::get('/fasilitas-sekolah', [VisitorFasilitasController::class, 'index'])->name('fasilitas.index');

Route::get('/pengumuman-dan-berita', [VisitorAnnouncementController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman-dan-berita/{id}', [VisitorAnnouncementController::class, 'show'])->name('detail-pengumuman.index');

Route::get('/prestasi', [VisitorPrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/prestasi/{id}', [VisitorPrestasiController::class, 'show'])->name('detail-prestasi.index');

Route::get('/kalender-akademik', [VisitorKalenderController::class, 'index'])->name('kalender.index');

Route::get('/staff-pengajar', [VisitorPengajarController::class, 'index'])->name('pengajar.index');

Route::get('/ekstrakurikuler', [VisitorEkskulController::class, 'index'])->name('ekskul.index');
Route::get('/ekstrakurikuler/{id}', [VisitorEkskulController::class, 'show'])->name('detail-ekskul.index');

Route::get('/dokumentasi', [VisitorDokumentasiController::class, 'index'])->name('dokumentasi.index');
Route::get('/dokumentasi/{kelas}', [VisitorDokumentasiController::class, 'showByClass'])->name('dokumentasi.showByClass');
