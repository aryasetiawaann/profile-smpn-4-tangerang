@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/prestasibanner.jpg" alt="banner">
        <div class="line">
            <marquee direction="left">SELAMAT DATANG DI WEBSITE SMP NEGERI 4 KOTA TANGERANG | UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</marquee>
        </div>
        <div class="banner-desc" data-aos="fade-up"
     data-aos-duration="1000">
            <p>AKADEMIK</p>
            <h1>PRESTASI</h1>
        </div>
    </div>
    <div class="prestasi-content">
        <div class="prestasi-content-head" data-aos="fade-left"
     data-aos-duration="1000">
            <p>AKADEMIK</p>
            <h1>PRESTASI SISWA DAN SEKOLAH</h1>
        </div>
        <div class="prestasi-content-body">
            @foreach ($prestasis as $prestasi)
            <div class="prestasi-card" data-aos="fade-up"
     data-aos-duration="1000">
                <img src="{{ 'storage/' . $prestasi->photo }}">
                <div class="prestasi-card-desc">
                    <a href="/prestasi/{{ $prestasi->id }}" style="text-decoration:none;color:unset;">
                        <h1>{{ $prestasi->judul }}</h1>
                    </a>
                    <p class="prestasi-date">{{ $prestasi->tanggal->format('d F Y') }}</p>
                    <hr>
                    <p class="prestasi-highlight">{{ Str::limit($prestasi->deskripsi, 200) }}</p>
                    <div class="prestasi-desc-detail">
                        <img src="/assets/person.png" alt="person">
                        <p>{{ $prestasi->tim }}</p>
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