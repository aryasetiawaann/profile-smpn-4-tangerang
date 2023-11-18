<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/homepage.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/sejarah.css">
    <link rel="stylesheet" href="/css/pengajar.css">
    <link rel="stylesheet" href="/css/ekskul.css">
    <link rel="stylesheet" href="/css/kalender.css">
    <link rel="stylesheet" href="/css/prestasi.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/pengumuman.css">
    <link rel="stylesheet" href="/css/dokumentasi.css">
    <link rel="stylesheet" href="/css/fasilitas.css">
    <link rel="stylesheet" href="/css/detail-pengumuman.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SMPN 4 Tangerang | {{ $title }}</title>
</head>
<body>
    <div x-data="{isopen_sidebar : false}" id="top">
        <div class="navbar-c shadow-lg">
            <div class="navbar-c-left">
                <a href="/">
                    <img src="/assets/logo.png" alt="logo">
                </a>
                <div class="navbar-c-left-desc">
                    <h1>SMP NEGERI 4 TANGERANG</h1>
                    <p>Jl. Mochammad Yamin No.1, RT.002/RW.003, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118</p>
                </div>
            </div>
            <div class="navbar-c-right">
                <div class="navbar-c-right-content">
                    <img src="/assets/email.png" alt="email">
                    <a href="mailto:info@smpn4.tangerang.sch.id" style="color:unset;text-decoration:none;"><p>info@smpn4.tangerang.sch.id</p></a>
                </div>
                <div class="navbar-c-right-content">
                    <img src="/assets/telephone.png" alt="telephone">
                    <p>(021) 123-456-788</p>
                </div>
            </div>
        </div>
            @include('partials.sidebar')
            <div :class="{'expand': !isopen_sidebar}" class="content">
                @yield('content')
            </div>
        </div>
        <div class="go-top">
        <a href="#top">
        <button>
        <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
        </button>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>