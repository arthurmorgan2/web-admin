<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Administrasi Balai PPA DP3AP2 DIY</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <!-- Navbar Login -->
    <nav class="navbar navbar-expand-lg" style="background-color: #4e73df">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="50" height="60"
                    class="d-inline-block align-text-top">
                <h3>WEB ADMINISTRASI BALAI PPA DIY</h3>
            </a>
        </div>
    </nav>
    <!-- End Navbar Login -->

    <!-- Form Login -->
    <div class="container"><br>
        <div class="card col-md-4 col-md-offset-4" style="margin-top: 60px " id="badan">
            <h4 class="text-center"><br>Login Akun</h4>
            <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="67" height="80"
                style="display:block; margin:auto;" class="d-flex d-inline-block align-text-top text-center">
            <hr>
            @if (session('error'))
                <div class="alert alert-danger">
                    <b>Opps!</b> {{ session('error') }}
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <hr>
                <button type="submit" id="btn" class="btn btn-block mt-3">Log In</button>
            </form>
        </div>
    </div>
    <!-- End Form Login -->

</body>

</html>
