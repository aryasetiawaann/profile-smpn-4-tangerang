@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-container">
    <div class="pengajar-admin-head">
        <h2>Kata Sambutan</h2>
    </div>
    <div class="pengajar-admin-body">
        @if ($sambutan->isEmpty())
        <a href="{{ route('admin.sambutan.create') }}" class="pengajar-admin-add">+Add</a>
        @endif
        <div class="pengajar-admin-table-container">
            <table border="1">
                <thead>
                    <tr>
                        <th>Kepala Sekolah</th>
                        <th>Kata Sambutan</th>
                        <th>Foto</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sambutan as $sambutanItem)
                    <tr>
                        <td>
                            <img class="pengajar-admin-photo " src="{{ Storage::url($sambutanItem->photo) }}" alt="Foto Kepsek">
                        </td>
                        <td>{{ $sambutanItem->namakepsek }}</td>
                        <td><div style="overflow: auto; height: 150px;">{{ $sambutanItem->deskripsi }}</div></td>
                        <td>
                            <a href="{{ route('admin.sambutan.edit', $sambutanItem->id) }}" class="pengajar-admin-edit"><img src="/assets/edit.png" alt="edit"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@php
$title = 'Admin Sambutan';
@endphp