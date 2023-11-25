@extends('layouts.admin')

@section('content')
<div class="prestasi-container">
    <div class="head-prestasi">
        <h2>Prestasi Siswa dan Sekolah</h2>
    </div>
    <div class="prestasi-body">
        <div class="button-add-prestasi">
            <button><a href="{{ route('admin.prestasi.create') }}">+ Add</a></button>
        </div>
        <div class="prestasi-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Judul</th>
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
                        <td class="prestasi-deskripsi">{{ Str::limit($prestasi->deskripsi, 100) }}</td>
                        <td>{{ $prestasi->tanggal }}</td>
                        <td>
                            <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}">Edit</a>
                            <form action="{{ route('admin.prestasi.destroy', $prestasi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
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