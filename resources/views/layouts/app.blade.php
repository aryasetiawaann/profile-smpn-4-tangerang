<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>SMPN 4 Tangerang | {{ $title }}</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <img src="assets/logo.png" alt="logo">
            <div class="navbar-left-desc">
                <h1>SMP NEGERI 4 TANGERANG</h1>
                <p>Jl. Mochammad Yamin No.1, RT.002/RW.003, Babakan, Kec. Tangerang, Kota Tangerang, Banten 15118</p>
            </div>
        </div>
        <div class="navbar-right">
            <div class="navbar-right-content">
                <img src="assets/email.png" alt="email">
                <p>info@smpn4.tangerang.sch.id</p>
            </div>
            <div class="navbar-right-content">
                <img src="assets/telephone.png" alt="telephone">
                <p>(021) 123-456-788</p>
            </div>
        </div>
    </div>
        <div class="sidebar">Sidebar</div>
        <div class="content">
            @yield('content')
        </div>
</body>
</html>