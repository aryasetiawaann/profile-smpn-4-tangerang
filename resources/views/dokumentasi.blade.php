@php
    $title = 'Dokumentasi';
@endphp
@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/foto-sekolah.webp" alt="foto-sekolah">
        <div class="line">
            <marquee direction="left">SELAMAT DATANG DI WEBSITE SMP NEGERI 4 KOTA TANGERANG | UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</marquee>
        </div>
        <div class="banner-desc" data-aos="fade-up"
     data-aos-duration="1000">
            <p>DOKUMENTASI</p>
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="dokumentasi-content">
        <div class="dokumentasi-content-head">
            <p>DOKUMENTASI</p>
            <h1>SMP NEGERI 4 TANGERANG {{ $title }}</h1>
        </div>
        <div class="dokumentasi-content-body" data-aos="fade-up"
     data-aos-duration="1000">
            @foreach ($dokumentasi as $dokumentasi)
                <div class="dokumentasi-card">
                    <img src="{{ asset('storage/' . $dokumentasi->photo) }}" alt="{{ $dokumentasi->judul }}">
                    <div class="dokumentasi-card-desc">
                        <p>{{ $dokumentasi->judul }}</p>
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
