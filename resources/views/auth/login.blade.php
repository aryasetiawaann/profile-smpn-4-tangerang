<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>SMPN 4 Tangerang | Login</title>
</head>
<body>
    <div class="login-container">
        <img class="login-banner" src="/assets/fas-lobby.jpg" alt="banner">
        <div class="login-form-container">
            <a href="/">
                <div class="login-form-head">
                    <img src="/assets/logo.png" alt="logo">
                    <h1>SMPN 4 TANGERANG</h1>
                </div>
            </a>
            <div class="login-form-body">
                <!-- Tampilkan alert jika ada -->
                @if(session('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usernameInput" name="name" placeholder="">
                        <label for="usernameInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordInput" name="password" placeholder="">
                        <label for="passwordInput">Password</label>
                    </div>
                    <button type="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
