<!-- Navbar -->
<nav class="navbar navbar-expand-sm fixed-top shadow-sm">
    <div class="container">
        <a href="/">
            <div class="navbar-brand">
                <img class="logo-image" src="{{ asset('assets/img/LOGO1.png') }}">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/berita">
                        Berita
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/daftar-pengunjung">
                        Daftar Pengunjung
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white btn btn-login" aria-current="page" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- End Navbar -->
