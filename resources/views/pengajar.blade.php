<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@php

$gurus = [
    ['nama' => 'Dr. Lee ji eun, S.Pd.'],    
    ['nama' => 'Kim Hyung-seo, S.Kom, S.Pd'],    
    ['nama' => 'Guru 3'],    
    ['nama' => 'Guru 4'],    
    ['nama' => 'Guru 5'],    
    ['nama' => 'Guru 6'],    
    ['nama' => 'Guru 7'],    
    ['nama' => 'Guru 8'],    
    ['nama' => 'Guru 9'],    
    ['nama' => 'Guru 10'],    
    ['nama' => 'Guru 11'],    
    ['nama' => 'Guru 12'],    
    ['nama' => 'Guru 13'],    
    ['nama' => 'Guru 14'],    
    ['nama' => 'Guru 15'],    
    ['nama' => 'Guru 15'],    
    ['nama' => 'Guru 15'],    
    ['nama' => 'Guru 15'],    
    ['nama' => 'Guru 15'],    
    ['nama' => 'Guru 16']
    ];

    $slides = array_chunk($gurus, 8);

@endphp

@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner2.png" alt="banner2">
        <div class="line"></div>
        <div class="banner-desc">
            <p>PROFILE</p>
            <h1>STAFF PENGAJAR</h1>
        </div>
    </div>
    <div class="pengajar-content">
        <div class="pengajar-content-head">
                <p>STAFF</p>
                <h1>STAFF PENGAJAR</h1>
        </div>
        <div class="pengajar-content-body">
            <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                    <div class="swiper-slide">
                        @foreach($slide as $guru)
                            <div class="card">
                                <img src="/assets/staff.png" alt="staff">
                                <div class="card-body">
                                    <p>{{ $guru['nama'] }}</p>
                                    <p>Kepala Sekolah</p>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    @endforeach
            </div>
            <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>


@stop