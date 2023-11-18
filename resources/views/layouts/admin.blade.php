<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/sidebaradmin.css">
    <link rel="stylesheet" href="/css/homeadmin.css">
    <link rel="stylesheet" href="/css/pengumuman-admin.css">
    <link rel="stylesheet" href="/css/prestasi-admin.css">
    <link rel="stylesheet" href="/css/dokumentasi-admin.css">
    <link rel="stylesheet" href="/css/ekskul-admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>Admin SMPN 4 Tangerang | {{ $title }}</title>
</head>
<body>
    <div class="admin-container">
        <div class="admin-sidebar">
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="/assets/logo.png">
                        <h2>Admin</h2>
                    </div>
                    <div class="close-btn">
                    <span class="material-symbols-outlined">
                        close
                        </span>
                    </div>
                </div>
                <div></div>
                <div class="line"></div>
                <div class="sidebar">
                    <a href="#" class="active">
                    <span class="material-symbols-outlined">home</span>
                    <h3>Home</h3>
                    </a>
                    <a href="">
                    <span class="material-symbols-outlined">groups</span>
                    <h3>Staff</h3>
                    </a>
                    <a href="{{ route('admin.fasilitas.index') }}">
                    <span class="material-symbols-outlined">business</span>
                    <h3>Fasilitas</h3>
                    </a>
                    <a href="#">
                    <span class="material-symbols-outlined">steps</span>
                    <h3>Ekstrakulikuler</h3>
                    </a>
                    <a href="{{ route('admin.announcement.index') }}">
                    <span class="material-symbols-outlined">campaign</span>
                    <h3>Pengumumuman & Berita</h3>
                    </a>
                    <a href="#">
                    <span class="material-symbols-outlined">emoji_events</span>
                    <h3>Prestasi</h3>
                    </a>
                    <a href="#">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <h3>Kalender Akademik</h3>
                    </a>
                    <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                    </a>
                </div>
            </aside>
        </div>
        <div class="admin-content">
            @yield('content')
        </div>
    </div>
</body>
</html>