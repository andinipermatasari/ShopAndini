<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Login</title>
    <style>
        body{
            font-family: monospace;
            background-color: deeppink;
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="vh-100 row h-50 justify-content-center align-items-center">
            <div class="card col-lg-6 align-center" style="color: rgb(5, 27, 19)">
                <div class="card-body">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 py-5 align-center">
                            <h3 class="fw-bold text-center">Login</h3>
                            <p class="lead"></p>
                            <form action="{{ url('login/admin') }}" method="post">
                                @csrf
                                <div class="input-group mb-4 mt-3">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan Masukkan Email" aria-label="email" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-4 mt-3">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Silahkan Masukkan Password" aria-label="password" aria-describedby="basic-addon1">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" value="Login" class="form-control text-white" style="background-color: blue">
                                </div>
                                <div class="mt-3 text-center">
                                    <p>Tidak Punya Akun? <a href="/register/admin" class="text-decoration-none">Buat Akun.</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>