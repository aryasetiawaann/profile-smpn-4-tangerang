@extends('layouts.admin')

@section('content')
    <div>
        <div class="container-edit">
        <div class="head-edit">
                 <h1>Edit Kalender Akademik</h1>
            </div>
            <div class="inner-container">
                <h1>UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</h1>
                <form action="" method="post">
                    <div class="top-form">
                        <div class="title-form">
                            <label for="title">Judul</label>
                            <input type="text" id="title" name="title" placeholder="Masukkan Judul" required>
                        </div>          
                    </div>
                    <div class="bot-form">
                    <div class="file-form">
                            <label class="foto">Foto</label>
                            <input type="file" accept="image/*">
                            <span class="file-custom"></span>
                        </div>
                    </div>
                    <div class="simpan-button">
                    <button a href="" class="my-button" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@stop