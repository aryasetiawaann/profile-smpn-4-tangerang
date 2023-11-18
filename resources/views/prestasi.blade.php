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
            @for ($i = 0; $i < 10; $i++) 
                <div class="prestasi-card">
                    <img src="/assets/prestasi.png" alt="prestasi">
                    <div class="prestasi-card-desc">
                        <a href="">
                            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, optio..</h1>
                        </a>  
                        <p class="prestasi-date">4 November 2023</p>
                        <hr>
                        <p class="prestasi-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor natus enim molestias placeat doloribus magnam perspiciatis deleniti qui veritatis optio!</p>
                        <div class="prestasi-desc-detail">
                            <img src="/assets/person.png" alt="person">
                            <p>Tim sepakbola SMPN 4 TANGERANG</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div>
        @include('partials.footer')
    </div>
</div>
@stop