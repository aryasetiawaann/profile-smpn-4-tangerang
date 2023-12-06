@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/foto-sekolah.webp" alt="banner">
        <div class="line">
            <marquee direction="left">SELAMAT DATANG DI WEBSITE SMP NEGERI 4 KOTA TANGERANG | UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</marquee>
        </div>
        <div class="banner-desc" data-aos="fade-up"
     data-aos-duration="1000">
            <p>PROFILE</p>
            <h1>FASILITAS SEKOLAH</h1>
        </div>
    </div>
    <div class="fasilitas-content">
        <div class="fasilitas-content-head" data-aos="fade-left"
     data-aos-duration="1000">
            <p>PROFILE</p>
            <h1>FASILITAS SEKOLAH</h1>
        </div>
        <div class="fasilitas-content-body" data-aos="fade-up"
     data-aos-duration="1000">
            @foreach($fasilitas as $facility)
                <div class="fasilitas-card">
                <img src="{{ asset('storage/' . $facility->photo) }}" alt="{{ $facility->name }}">
                    <div class="fasilitas-card-desc">
                        <p>{{ $facility->name }}</p>
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
$title = 'Fasilitas';
@endphp