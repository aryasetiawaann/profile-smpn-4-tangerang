@extends('layouts.app')

@section('content')

<div>
    <div class="carousel-container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="/assets/banner-1.jpg" class="d-block w-100 c-img" alt="banner1">
            <div class="carousel-caption d-md-block">
                <h5>Selamat datang di profile SMPN 4 Tangerang</h5>
                <p>Tari Topeng Klana Cirebon di acara "Tridoeta Lima Jam Menari 2020"</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/banner-2.jpg" class="d-block w-100 c-img" alt="banner2">
            <div class="carousel-caption d-md-block">
                <h5>Second slide label</h5>
                <p>Festival Tari Kreasi Tradisional. dalam rangka "Memperingati Hari Sumpah Pemuda ke-95".</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/assets/banner-3.jpg" class="d-block w-100 c-img" alt="banner3">
            <div class="carousel-caption d-md-block">
                <h5>Third slide label</h5>
                <p>Penampilan Tari Medley dalam acara Pembukaan O2Sn (Olimpiade Olahraga Siswa Nasional) tahun 2023.</p>
            </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
        </div>
    </div>

    <div class="home-line"></div>

    <div class="home-sambutan">
        <div class="home-sambutan-head">
            <h1>SAMBUTAN KEPALA SEKOLAH</h1>
            <p>SMP NEGERI 4 TANGERANG</p>
        </div>
        <div class="home-sambutan-body">
            <img src="/assets/kepsek.png" alt="kepala-sekolah">
            <div class="home-sambutan-desc">
                <h3>H. MULYONO SOBAR, S.Pd, M.Pd.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <div class="home-visi-misi">
        <div class="visi">
            <h1>VISI</h1>
            <p>
                Visi SMP Negeri 4 disesuikan dengan visi Pemerintah Kota Tangerang yang menitikberatkan pada pendidikan karakter akhlakul karimah. Visi SMP Negeri 4 Tangerang adalah
                mewujudkan peserta didik yang berkarakter, berprestasi, sehat dan berwawasan lingkungan.
            </p>
        </div>
        <div class="misi">
            <h1>MISI</h1>
            <ul>
                <li><p>Melaksanakan Projek Penguatan Profil Pelajar Pancasila</p></li>
                <li><p>Mengimplentasikan Kurikulum Merdeka dan kegiatan ekstrakurikuler dalam upaya mencapai prestasi</p></li>
                <li><p>Melaksanakan program sekolah sehat</p></li>
                <li><p>Melaksanakan program sekolah adiwiyata nasional</p></li>
                <li><p>Melaksanakan program sekolah ramah anak</p></li>
                <li><p>Melaksanakan kerjasama antar warga sekolah, orangtua, masyarakat dan lembaga lain yang terkait.</p></li>
            </ul>
        </div>
    </div>
    <div class="home-berita">
        <div class="home-berita-head">
            <h1>TERKINI</h1>
            <p>PENGUMUMAN DAN BERITA</p>
        </div>
        <div class="home-berita-body">
        @php
            $topAnnouncements = \App\Models\Announcement::orderBy('created_at', 'desc')->take(3)->get();
        @endphp

        @foreach ($topAnnouncements as $announcement)
            <div class="home-berita-item">
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
