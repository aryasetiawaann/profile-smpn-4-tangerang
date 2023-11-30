@extends('layouts.admin')

@section('content')
<div class="pengumuman-container">
    <div class="head-pengumuman">
        <h2>Prestasi Siswa dan Sekolah</h2>
    </div>
    <div class="pengumuman-body">
        <div class="button-add-pengumuman">
            <button><a href="{{ route('admin.prestasi.create') }}">+ Add</a></button>
        </div>
        <div class="pengumuman-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($prestasi as $prestasi)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $prestasi->photo) }}" alt="{{ $prestasi->judul }}" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ $prestasi->judul }}</td>
                        <td>{{ $prestasi->tim }}</td>
                        <td class="pengumuman-deskripsi">{{ Str::limit($prestasi->deskripsi, 100) }}</td>
                        <td>{{ $prestasi->tanggal }}</td>
                        <td>
                            <a class="pengajar-admin-edit" href="{{ route('admin.prestasi.edit', $prestasi->id) }}"><img src="/assets/edit.png" alt="edit"></a>
                            <form action="{{ route('admin.prestasi.destroy', $prestasi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="pengajar-admin-delete" type="submit"><img src="/assets/trash.png" alt="trash"></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada prestasi.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Prestasi';
@endphp