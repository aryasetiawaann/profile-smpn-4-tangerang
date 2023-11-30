@extends('layouts.admin')

@section('content')
<div class="pengajar-admin-container">
    <div class="pengajar-admin-head">
        <h2>Visi & Misi</h2>
    </div>
    <div class="pengajar-admin-body">
        @if ($visimisi->count() < 2)
            <a href="{{ route('admin.visimisi.create') }}" class="pengajar-admin-add">+Add</a>
        @endif
        <div class="visimisi-admin-table-container">
            <table border="1">
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tindakan</th>
                </tr>
                <tbody>
                    @foreach ($visimisi as $visimisiItem)
                    <tr>
                        <td>{{ $visimisiItem->judul }}</td>
                        <td><div style="overflow: auto; height: 150px;">{{ $visimisiItem->deskripsi }}</div></td>
                        <td>
                            <a href="{{ route('admin.visimisi.edit', $visimisiItem->id) }}" class="pengajar-admin-edit"><img src="/assets/edit.png" alt="edit" class="pengajar-admin-edit"></a>
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
$title = 'Admin Visimisi';
@endphp