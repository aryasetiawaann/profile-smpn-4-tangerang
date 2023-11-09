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
            <img src="assets/banner-1.jpg" class="d-block w-100 c-img" alt="banner1">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="assets/banner-2.jpg" class="d-block w-100 c-img" alt="banner2">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div> -->
            </div>
            <div class="carousel-item">
            <img src="assets/banner-3.jpg" class="d-block w-100 c-img" alt="banner3">
            <!-- <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div> -->
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
        <div class="home-sekolah">
            <h1>SAMBUTAN KEPALA SEKOLAH</h1>
            <p class="home-namasekolah">SMP NEGERI 4 TANGERANG</p>
        </div>
        <div class="home-kepsek">
            <img class="home-imagekepsek" src="assets/kepsek.png">
            <div class="home-textkepsek">
                <div class="home-namakepsek">
                    H. MULYONO SOBAR, S.Pd, M.Pd.
                </div>
                <div class="home-loremkepsek">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </div>
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
            <p>
                Untuk mewujudkan visi tersebut, UPT Satuan Pendidikan SMP Negeri 4 Tangerang menetapkan misi sebagai berikut:
            </p>
            <ul>
                <li>Melaksanakan Projek Penguatan Profil Pelajar Pancasila</li>
                <li>Mengimplentasikan Kurikulum Merdeka dan kegiatan ekstrakurikuler dalam upaya mencapai prestasi</li>
                <li>Melaksanakan program sekolah sehat</li>
                <li>Melaksanakan program sekolah adiwiyata nasional</li>
                <li>Melaksanakan program sekolah ramah anak</li>
                <li>Melaksanakan kerjasama antar warga sekolah, orangtua, masyarakat dan lembaga lain yang terkait.</li>
            </ul>
        </div>
    </div>
    <div class="home-berita">
        <h1>TERKINI</h1>
        <p class="home-berita2">PENGUMUMAN DAN BERITA</p>
    </div>
    <div class="flex-container">
        <div class="flex-item">
            <img class="flex-image" src="https://via.placeholder.com/379x217">
            <div class="flex-content">
                <div class="flex-title">Lorem ipsum SMPN 4 Tangerang</div>
                <div class="flex-date">4 November 2019</div>
                <div class="flex-read-more">Read More >></div>
            </div>
        </div>
        <div class="flex-item">
            <img class="flex-image" src="https://via.placeholder.com/379x217">
            <div class="flex-content">
                <div class="flex-title">Lorem ipsum SMPN 4 Tangerang</div>
                <div class="flex-date">4 November 2019</div>
                <div class="flex-read-more">Read More >></div>
            </div>
        </div>
        <div class="flex-item">
            <img class="flex-image" src="https://via.placeholder.com/379x217">
            <div class="flex-content">
                <div class="flex-title">Lorem ipsum SMPN 4 Tangerang</div>
                <div class="flex-date">4 November 2019</div>
                <div class="flex-read-more">Read More >></div>
            </div>
        </div>
        <div class="spacing"></div>
    </div>
</div>

<div class="footer">
    @include('partials.footer')
</div>

@stop
