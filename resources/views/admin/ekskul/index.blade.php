@extends('layouts.admin')

@section('content')
<div class="ekskul-container">
    <div class="head-ekskul">
        <h2>Ekstrakulikuler</h2>
    </div>
    <div class="ekskul-body">
        <div class="button-add-ekskul">
            <button><a href="{{ route('admin.ekskul.create') }}">+ Add</a></button>
        </div>
        <div class="ekskul-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Ekskul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ekskul as $ekskul)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $ekskul->photo) }}" alt="{{ $ekskul->nama }}" style="width: 100px; height: auto;">
                        </td>
                        <td>{{ $ekskul->nama }}</td>
                        <td class="ekskul-deskripsi">{{ Str::limit($ekskul->deskripsi, 100) }}</td>
                        <td>
                            <a href="{{ route('admin.ekskul.edit', $ekskul->id) }}">Edit</a>
                            <form action="{{ route('admin.ekskul.destroy', $ekskul->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada ekstrakulikuler.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Ekskul';
@endphp