@extends('layouts.app')

@section('content')
<div>
    <div class="banner">
        <img src="/assets/banner.png" alt="banner">
        <div class="line"></div>
        <div class="banner-desc">
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
    </div>
    <div class="pengumuman-content">
        <div class="pengumuman-content-head">
            <p>TERKINI</p>
            <h1>PENGUMUMAN DAN BERITA</h1>
        </div>
        <div class="pengumuman-content-body">
            @for ($i = 0; $i < 10; $i++) 
            <div class="home-berita-item">
                <img src="https://via.placeholder.com/379x217">
                <div class="berita-item-desc">
                    <a href="/pengumuman-dan-berita/id" style="text-decoration:none;color:unset;"><h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, molestiae SMPN 4 Tangerang.</h5></a>
                    <p class="item-desc-date">11 November 2023</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae cum libero sapiente suscipit nam iusto maxime placeat aspernatur rem minus.</p>
                    <a href="" style="text-decoration:none;color:unset;"><p class="item-desc-more">Read More >></p></a>
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