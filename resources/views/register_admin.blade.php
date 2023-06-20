<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Register</title>
    <style>
        body{
            font-family: monospace;
            background-color: rgb(241, 20, 130);
        }
    </style>
</head>
<body>
    <div class="container h-100">
        <div class="vh-100 row h-50 d-flex justify-content-center align-items-center">
            <div class="card col-lg-4 align-center" style="color: blueviolet">
                <div class="card-body">
                    <div class="py-5">
                        <h3 class="fw-bold text-center">Register</h3>
                        <form action="{{ url('register/admin') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label fw-bold">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Masukkan Confirm Password" required>
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="Simpan" class="form-control text-white btn" style="background-color: rgb(17, 96, 242)">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>