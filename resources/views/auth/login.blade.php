<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/static/images/logo/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/static/images/logo/favicon.png') }}" rel="apple-touch-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">

    <style>
        .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 470px; /* Sesuaikan dengan lebar maksimum login box */
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}
.card {
    border: none; /* Menghapus border kartu */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan kartu */
}

a:hover {
    color: #0300a7;
}

a:hover svg {
    fill: #96007d;
}



    </style>
</head>

<body class="login-page">
    <div class="login-box container-sm ">
        <div class="card card-outline card-info">
            <div class="card-header text-center">
                <a href="{{ route('index') }}" class="h1">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="coral" width="45" height="45"><path d="M40.67,32.43c-3,2.54-7.13,2.62-9.93,2.27a23.17,23.17,0,0,1,7-4.9C47.93,25.28,47,11,46.94,10.84c-.09-2.53-4.18-2.42-4,.3,0,.1.61,9.34-4.69,13.69a11.87,11.87,0,0,0-3.34-8,23.93,23.93,0,0,0,5-9.33,2,2,0,1,0-3.88-1,19.94,19.94,0,0,1-4.09,7.68c-3-3.65-1.05-10.6-1-10.68a2,2,0,0,0-3.83-1.14c-.14.46-3.34,11.45,3.8,16.22,3.74,2.49,3.58,6.72,3.33,8.48a27.9,27.9,0,0,0-8.06,6.72,28.43,28.43,0,0,0-1-5.38,16.65,16.65,0,0,0,2.76-6A2,2,0,1,0,24,21.61a13.8,13.8,0,0,1-.82,2.32c-1.89-3.12-3-3.19-5.5-6.06A17.55,17.55,0,0,0,22,6a2,2,0,0,0-2.34-2c-3.18.53-.06,4.89-4.37,10.51A17.31,17.31,0,0,1,13,8.75,2,2,0,0,0,10.74,7c-4.14.49.25,8.69,2.6,11.85,2.14,4.28,8.76,4.51,8.89,17.53a44.78,44.78,0,0,0-10.08-6.61A7.91,7.91,0,0,0,14,25a2,2,0,1,0-4,.08,4.73,4.73,0,0,1-1.37,2.72C3.82,23.74,5,16,5,11A2,2,0,0,0,2.34,9.1C.73,9.61,1,11.36,1,13,1,18.15.17,27.64,7.85,32.1c1.2.8,4.51,1.78,9.28,5.31,2.57,1.91,1.33,4.62.61,7A2,2,0,0,0,19.66,47h8.62a2,2,0,0,0,1.92-2.57l-1.36-4.51a1,1,0,0,1,1.1-1.28c4.65.64,9.5,0,13.17-3A2,2,0,1,0,40.67,32.43Z" data-name="30. Coral"></path></svg> --}}
                    <b>SIG Pulau Tikus</b>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" id="coral" width="45" height="45"><path d="M40.67,32.43c-3,2.54-7.13,2.62-9.93,2.27a23.17,23.17,0,0,1,7-4.9C47.93,25.28,47,11,46.94,10.84c-.09-2.53-4.18-2.42-4,.3,0,.1.61,9.34-4.69,13.69a11.87,11.87,0,0,0-3.34-8,23.93,23.93,0,0,0,5-9.33,2,2,0,1,0-3.88-1,19.94,19.94,0,0,1-4.09,7.68c-3-3.65-1.05-10.6-1-10.68a2,2,0,0,0-3.83-1.14c-.14.46-3.34,11.45,3.8,16.22,3.74,2.49,3.58,6.72,3.33,8.48a27.9,27.9,0,0,0-8.06,6.72,28.43,28.43,0,0,0-1-5.38,16.65,16.65,0,0,0,2.76-6A2,2,0,1,0,24,21.61a13.8,13.8,0,0,1-.82,2.32c-1.89-3.12-3-3.19-5.5-6.06A17.55,17.55,0,0,0,22,6a2,2,0,0,0-2.34-2c-3.18.53-.06,4.89-4.37,10.51A17.31,17.31,0,0,1,13,8.75,2,2,0,0,0,10.74,7c-4.14.49.25,8.69,2.6,11.85,2.14,4.28,8.76,4.51,8.89,17.53a44.78,44.78,0,0,0-10.08-6.61A7.91,7.91,0,0,0,14,25a2,2,0,1,0-4,.08,4.73,4.73,0,0,1-1.37,2.72C3.82,23.74,5,16,5,11A2,2,0,0,0,2.34,9.1C.73,9.61,1,11.36,1,13,1,18.15.17,27.64,7.85,32.1c1.2.8,4.51,1.78,9.28,5.31,2.57,1.91,1.33,4.62.61,7A2,2,0,0,0,19.66,47h8.62a2,2,0,0,0,1.92-2.57l-1.36-4.51a1,1,0,0,1,1.1-1.28c4.65.64,9.5,0,13.17-3A2,2,0,1,0,40.67,32.43Z" data-name="30. Coral"></path></svg> --}}
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masuk sebagai Admin</p>

                <form action="{{ route('login.store') }}" method="post">
                    @csrf
                    <div class="input-group mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div style="color: red">
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-group mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Kata sandi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div style="color: red">
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block mt-1">Masuk</button>
                        </div>

                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire(
                'Tidak Bisa Login!',
                'Email atau password Anda salah!',
                'error'
            )
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            Swal.fire(
                'Kamu Telah Logout!',
                '',
                'warning'
            )
        </script>
    @endif


</body>

</html>
