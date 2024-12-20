<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemerintah Kabupaten Sumenep</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="img/logo.png" rel="icon" media="(prefers-color-scheme: light)">
    <link href="img/logo white.png" rel="icon" media="(prefers-color-scheme: dark)">
    <link href="img/logo.png" rel="apple-touch-icon" media="(prefers-color-scheme: light)">
    <link href="img/logo white.png" rel="apple-touch-icon" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    <style>
        .btn-primary {
            background-color: #236170 !important;
        }

        .card-primary.card-outline {
            border-top: 3px solid #236170;
        }
    </style>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card-header text-center">
            <a href="" class="h2"><b>Pemerintah</b><br>Kabupaten Sumenep</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register Admin</p>
                <form id="registerForm" action="/register" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="username" type="text" class="form-control" name="username" required
                            autocomplete="username" autofocus placeholder="Masukkan username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="fullname" type="text" class="form-control" name="fullname" required
                            autocomplete="fullname" placeholder="Masukkan nama lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="email_admin" type="email" class="form-control" name="email_admin" required
                            autocomplete="email_admin" placeholder="Masukkan email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control" name="password" required
                            autocomplete="new-password" placeholder="Masukkan password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>
                <a href="/login" class="text-center">Saya sudah mempunyai akun</a>
            </div>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/adminlte.min.js"></script>

</body>

</html>
