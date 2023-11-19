@extends('layouts.admin')

@section('content')
        <div class="container-edit">
            <div class="head-edit">
                 <h1>Edit Ekstrakurikular</h1>
            </div>
            <div class="inner-container">
                <div class="head-editpengumuman">
                <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
                </div>
                <form action="" method="post">
                    <div class="top-form">
                        <div class="title-form">
                            <label for="title">Nama</label>
                            <input type="text" id="title" name="title" placeholder="Masukkan Judul" required>
                        </div>          
                    </div>
                    <div class="bot-form">
                        <div class="description-form">
                        <label for="description">Deskripsi</label>
                        <textarea id="description" name="description" placeholder="Masukkan Teks Deskripsi" rows="10" cols="30" required></textarea>
                        </div>
                        <div class="file-form">
                            <label class="foto">Foto</label>
                            <input type="file" accept="image/*">
                            <span class="file-custom"></span>
                        </div>
                    </div>
                    <div class="simpan-button">
                    <button a href="" class="my-button" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
@stop