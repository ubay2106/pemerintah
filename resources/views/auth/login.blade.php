<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemerintah Kabupaten Sumenep</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="img/logo.png" rel="icon" media="(prefers-color-scheme: light)">
    <link href="img/logo white.png" rel="icon" media="(prefers-color-scheme: dark)">
    <link href="img/logo.png" rel="apple-touch-icon" media="(prefers-color-scheme: light)">
    <link href="img/logo white.png" rel="apple-touch-icon" media="(prefers-color-scheme: dark)">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- Styles -->
    <style>
        .btn-primary {
            background-color: #236170 !important;
        }

        .card-primary.card-outline {
            border-top: 3px solid #236170;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h2"><b>Pemerintah</b><br>Kabupaten Sumenep</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login Admin</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="login" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email_admin" type="email_admin" class="form-control" name="email_admin"
                            value="{{ old('email_admin') }}" autocomplete="email" autofocus
                            placeholder="Masukkan email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control" name="password"
                            autocomplete="current-password" placeholder="Masukkan password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="/register" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.min.js"></script>
</body>

</html>
