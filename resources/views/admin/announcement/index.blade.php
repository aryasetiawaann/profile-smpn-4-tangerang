@extends('layouts.admin')

@section('content')
<div class="pengumuman-container">
    <div class="head-pengumuman">
        <h2>Pengumuman dan Berita</h2>
    </div>
    <div class="pengumuman-body">
        <div class="button-add-pengumuman">
            <button><a href="{{ route('admin.announcement.create') }}">+ Add</a></button>
        </div>
        <div class="pengumuman-table">
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
                    @forelse ($announcements as $announcement)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $announcement->photo) }}" alt="{{ $announcement->judul }}" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ $announcement->judul }}</td>
                        <td class="pengumuman-deskripsi">{{ Str::limit($announcement->deskripsi, 100) }}</td>
                        <td>{{ $announcement->tanggal }}</td>
                        <td>
                            <a href="{{ route('admin.announcement.edit', $announcement->id) }}">Edit</a>
                            <form action="{{ route('admin.announcement.destroy', $announcement->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada pengumuman.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Pengumuman';
@endphp