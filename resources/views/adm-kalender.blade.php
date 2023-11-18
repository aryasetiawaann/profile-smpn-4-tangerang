@extends('layouts.admin')

@section('content')
<div class="pengumuman-container">
    <div class="head-pengumuman">
        <h2>Data Kalender Akademik</h2>
    </div>
    <div class="pengumuman-body">
        <div class="button-add-pengumuman">
            <button><a href="/admin/kalender/edit">+ Add</a></button>
        </div>
        <div class="pengumuman-table">
            <table>
                <thead>
                    <tr>
                        <th>File</th>
                        <th>Nama File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < 10; $i++) 
                    <tr>
                        <td class="kalender-name">Kalender Pendidikan SMT Genap 2022-2023.pdf</td>
                        <td class="pengumuman-deskripsi">NamaMahasiswa_NIM_Tugas Pertemuan 10.pdf</td>      
                        <td class="pengumuman-aksi-img"><img src="../assets/edit.png" alt="edit"> <img src="../assets/trash.png" alt="edit"></td>       
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop