@extends('layouts.admin')

@section('content')
<div class="dokumentasi-admin-container">
    <div class="dokumentasi-admin-head">
        <h2>Dokumentasi List</h2>
    </div>
    <div class="dokumentasi-admin-body">
        <div class="dokumentasi-admin-dropdown">
            <select id="kelas" name="kelas" onchange="filterTable()">
                <option value="all">All Classes</option>
                <option value="kelas-7">Kelas 7</option>
                <option value="kelas-8">Kelas 8</option>
                <option value="kelas-9">Kelas 9</option>
            </select>
        </div>
        <a href="{{ route('admin.dokumentasi.create') }}" class="dokumentasi-admin-add">+Add</a>
        <div class="dokumentasi-admin-table-container">
            <table border="1">
                <tr>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Class</th>
                    <th>Tindakan</th>
                </tr>
                <tbody id="dokumentasiTableBody">
                    @foreach ($dokumentasi as $dokumentasiItem)
                        <tr class="dokumentasiRow" data-kelas="{{ $dokumentasiItem->kelas }}">
                            <td>
                                <img class="dokumentasi-admin-photo" src="{{ asset('storage/' . $dokumentasiItem->photo) }}" alt="{{ $dokumentasiItem->judul }}">
                            </td>
                            <td>{{ $dokumentasiItem->judul }}</td>
                            <td>{{ $dokumentasiItem->kelas }}</td>
                            <td>
                                <a class="dokumentasi-admin-edit" href="{{ route('admin.dokumentasi.edit', $dokumentasiItem->id) }}"><img src="/assets/edit.png" alt="edit"></a>
                                <form action="{{ route('admin.dokumentasi.destroy', $dokumentasiItem->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dokumentasi-admin-delete" type="submit"><img src="/assets/trash.png" alt="trash"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script>
        function filterTable() {
            var selectedKelas = document.getElementById('kelas').value;
            var rows = document.getElementsByClassName('dokumentasiRow');

            for (var i = 0; i < rows.length; i++) {
                var row = rows[i];
                var kelas = row.getAttribute('data-kelas');

                if (selectedKelas === 'all' || selectedKelas === kelas) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            filterTable();
        });
    </script>
@endsection

@php
$title = 'Admin Dokumentasi';
@endphp.