@extends('layouts.app')

@section('content') 
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <p>AKADEMIK</p>
            <h1>PRESTASI</h1>
        </div>
    </div>
    <div class="prestasi-content">
        <div class="prestasi-content-head">
            <p>AKADEMIK</p>
            <h1>PRESTASI SISWA DAN SEKOLAH</h1>
        </div>
        <div class="prestasi-content-body">
        @foreach ($prestasis as $prestasi)
                <div class="prestasi-card">
                    <img src="/assets/prestasi.png" alt="prestasi">
                    <div class="prestasi-card-desc">
                        <a href="/prestasi/{{ $prestasi->id }}" style="text-decoration:none;color:unset;">
                            <h5>{{ $prestasi->judul }}</h5>
                            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, optio..</h1>
                        </a>  
                        <p class="prestasi-date">{{ $prestasi->tanggal->format('d F Y') }}</p>
                        <hr>
                        <p class="prestasi-highlight">{{ Str::limit($prestasi->deskripsi, 200) }}</p>
                        <div class="prestasi-desc-detail">
                            <img src="/assets/person.png" alt="person">
                            <p>Tim sepakbola SMPN 4 TANGERANG</p>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop

@php
$title = 'Prestasi Siswa dan Sekolah';
@endphp
