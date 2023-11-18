@extends('layouts.admin')

@section('content')
<div class="pengumuman-container">
    <div class="head-pengumuman">
        <h2>Data Pengajar</h2>
    </div>
    <div class="pengumuman-body">
        <div class="button-add-pengumuman">
            <button><a href="/admin/pengajar/edit">+ Add</a></button>
        </div>
        <div class="pengumuman-table">
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 10; $i++) 
                    <tr>
                        <td class="pengumuman-table-img"><img src="../assets/kepsek.png" alt=""></td>
                        <td>H. MULYONO SOBAR, S.Pd, M.Pd.</td>
                        <td class="pengumuman-deskripsi">Kepala Sekolah</td>
                        <td class="pengumuman-aksi-img"><img src="../assets/edit.png" alt="edit"> <img src="../assets/trash.png" alt="edit"></td>       
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
