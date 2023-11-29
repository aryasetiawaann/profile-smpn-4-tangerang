@php
$words = explode(' ', $title);
$check = end($words);
@endphp

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
    <link rel="stylesheet" href="/css/fasilitas-admin.css">
    <link rel="stylesheet" href="/css/pengajar-admin.css">
    <link rel="stylesheet" href="/css/ekskul-admin.css">
    <link rel="stylesheet" href="/css/error-msg.css">
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
                    <a class="{{ ($check == 'Home') ? 'active' : ' ' }}" href="/admin">
                        <span class="material-symbols-outlined">home</span>
                        <h3>Home</h3>
                    </a>
                    <a class="{{ ($check == 'Sambutan') ? 'active' : ' ' }}" href="{{ route('admin.sambutan.index') }}">
                        <span class="material-symbols-outlined">record_voice_over</span>
                        <h3>Sambutan</h3>
                    </a>
                    <a class="{{ ($check == 'Visimisi') ? 'active' : ' ' }}" href="{{ route('admin.visimisi.index') }}">
                        <span class="material-symbols-outlined">visibility</span>
                        <h3>Visi & Misi</h3>
                    </a>
                    <a class="{{ ($check == 'Pengajar') ? 'active' : ' ' }}" href="{{ route('admin.pengajar.index') }}">
                        <span class="material-symbols-outlined">groups</span>
                        <h3>Staff Pengajar</h3>
                    </a>
                    <a class="{{ ($check == 'Fasilitas') ? 'active' : ' ' }}" href="{{ route('admin.fasilitas.index') }}">
                        <span class="material-symbols-outlined">location_city</span>
                        <h3>Fasilitas</h3>
                    </a>
                    <a class="{{ ($check == 'Ekskul') ? 'active' : ' ' }}" href="{{ route('admin.ekskul.index') }}">
                        <span class="material-symbols-outlined">steps</span>
                        <h3>Ekstrakurikuler</h3>
                    </a>
                    <a class="{{ ($check == 'Pengumuman') ? 'active' : ' ' }}" href="{{ route('admin.announcement.index') }}">
                        <span class="material-symbols-outlined">campaign</span>
                        <h3>Pengumumuman & Berita</h3>
                    </a>
                    <a class="{{ ($check == 'Prestasi') ? 'active' : ' ' }}" href="{{ route('admin.prestasi.index') }}">
                        <span class="material-symbols-outlined">emoji_events</span>
                        <h3>Prestasi</h3>
                    </a>
                    <a class="{{ ($check == 'Kalender') ? 'active' : ' ' }}" href="{{ route('admin.kalender.index') }}">
                        <span class="material-symbols-outlined">calendar_month</span>
                        <h3>Kalender Akademik</h3>
                    </a>
                    <a class = "{{ ($check == 'Dokumentasi') ? 'active' : ' ' }}" href="{{ route('admin.dokumentasi.index') }}">
                        <span class="material-symbols-outlined">collections</span>
                        <h3>Dokumentasi</h3>
                    </a>
                    <a id="logoutLink" class="{{ ($check == 'Logout') ? 'active' : ' ' }}" href="{{ route('logout') }}">
                        <span class="material-symbols-outlined">logout</span>
                        <h3>Logout</h3>
                    </a>

                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <script>
                        document.getElementById('logoutLink').addEventListener('click', function(event) {
                            event.preventDefault(); // Prevent the default link behavior
                            var confirmation = confirm('Are you sure you want to logout?');
                            if (confirmation) {
                                document.getElementById('logoutForm').submit(); // Submit the form programmatically
                            }
                        });
                    </script>

                </div>
            </aside>
        </div>
        <div class="admin-content">
            @yield('content')
        </div>
    </div>
</body>

</html>