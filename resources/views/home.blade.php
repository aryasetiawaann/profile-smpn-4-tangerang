@extends('layouts.app')

@section('content')

<div>
    <div class="carousel-container" >
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/assets/banner-1.jpg" class="d-block w-100 c-img" alt="banner1" >
            <div class="carousel-caption d-md-block" data-aos="fade-up"
     data-aos-duration="1000">
                <h5>Selamat datang di profile SMPN 4 Tangerang</h5>
                <p>Tari Topeng Klana Cirebon di acara "Tridoeta Lima Jam Menari 2020"</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/banner-2.jpg" class="d-block w-100 c-img" alt="banner2">
            <div class="carousel-caption d-md-block">
                <h5>Festival Tari Kreasi Tradisional</h5>
                <p>Festival Tari Kreasi Tradisional. dalam rangka "Memperingati Hari Sumpah Pemuda ke-95".</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/banner-3.jpg" class="d-block w-100 c-img" alt="banner3">
            <div class="carousel-caption d-md-block">
                <h5>Penampilan Tari Medley</h5>
                <p>Penampilan Tari Medley dalam acara Pembukaan O2Sn (Olimpiade Olahraga Siswa Nasional) tahun 2023.</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    @php
        $sambutan = \App\Models\Sambutan::all();
        $visi = \App\Models\Visimisi::find(1);
        $misi = \App\Models\Visimisi::find(2);
    @endphp

    <div class="home-line">
        <marquee direction="left">SELAMAT DATANG DI WEBSITE SMP NEGERI 4 KOTA TANGERANG | UNGGUL TERAMPIL AKTIF MANDIRI ADAPTIF</marquee>
    </div>

    <div class="home-sambutan" data-aos="fade-up"
     data-aos-duration="1200">
        <div class="home-sambutan-head">
            <h1>SAMBUTAN KEPALA SEKOLAH</h1>
            <p>SMP NEGERI 4 TANGERANG</p>
        </div>
        @foreach ($sambutan as $sambutanItem)
        <div class="home-sambutan-body">
            <img src="{{ Storage::url($sambutanItem->photo) }}" alt="kepala-sekolah">
            <div class="home-sambutan-desc">
                <h3>{{ $sambutanItem->namakepsek }}</h3>
                <p>{!! nl2br(e($sambutanItem->deskripsi)) !!}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="home-visi-misi">
        @if($visi)
            <div class="visi" data-aos="fade-left" data-aos-duration="1000">
                <h1>{{$visi->judul}}</h1>
                <p>{!! nl2br(e($visi->deskripsi)) !!}</p> 
            </div>
        @else
            <h2>NO VISI DATA AVAILABLE</h2>
        @endif
        @if($misi)
        <div class="misi" data-aos="fade-right" data-aos-duration="1000">
            <h1>{{ $misi->judul }}</h1>
            <p>{!! nl2br(e($misi->deskripsi)) !!}</p>
        </div>
        @else
            <h2>NO MISI DATA AVAILABLE</h2>
        @endif
    </div>
    <div class="home-berita">
        <div class="home-berita-head" data-aos="fade-right"
     data-aos-duration="1000">
            <h1>TERKINI</h1>
            <p>PENGUMUMAN DAN BERITA</p>
        </div>
        <div class="home-berita-body">
        @php
            $topAnnouncements = \App\Models\Announcement::orderBy('created_at', 'desc')->take(3)->get();
        @endphp

        @foreach ($topAnnouncements as $announcement)
            <div class="home-berita-item" data-aos="fade-up"
     data-aos-duration="1000">
                <img src="{{ asset('storage/' . $announcement->photo) }}">
                <div class="berita-item-desc">
                    <a href="/pengumuman-dan-berita/{{ $announcement->id }}" style="text-decoration:none;color:unset;">
                        <h5>{{ $announcement->judul }}</h5>
                    </a>
                    <p class="item-desc-date">{{ $announcement->tanggal->format('d F Y') }}</p>
                    <p>{{ Str::limit($announcement->deskripsi, 200) }}</p>
                    <a href="/pengumuman-dan-berita/{{ $announcement->id }}" style="text-decoration:none;color:unset;">
                        <p class="item-desc-more">Read More >></p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
        <div class="home-berita-more">
            <button><a href="/pengumuman-dan-berita">Lihat Semua</a></button>
        </div>
    </div>
</div>
<div class="footer">
    @include('partials.footer')
</div>

@stop
