@extends('layouts.client.app')
@section('content')
    <!-- Carousel -->
    <div class="container-fluid">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/gambar1.jpg') }}" class="d-block w-100 h-250" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-center p-4">
                            <h1 class="hidden-md fw-bold">Balai Perlindungan Perempuan Dan Anak</h1>
                            <p>Balai Pelindungan Perempuan Dan Anak DP3AP2 Daerah Istimewa
                                Yogyakarta mempunyai tugas untuk memberikan pertolongan berupa pemberian konsultasi,
                                bantuan
                                hukum dan pemulihan psikologis korban secara gratis, karena Korban kekerasan harus
                                segera
                                mendapatkan pertolongan, pendampingan dan keadilan hukum.</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100 h-250"alt="...">
                    <div class="container">
                        <div class="carousel-caption text-center p-4">
                            <h1>RDU dan Puspaga</h1>
                            <p>“RDU (Rekso Dyah Utami) sendiri berfungsi untuk menyelenggarakan pelayanan
                                terpadu kepada perempuan dan anak korban kekerasan dengan memfasilitasi pelayanan
                                pengaduan, rehabilitasi kesehatan, rehabilitasi sosial, bantuan hukum, pemulangan
                                dan reintegrasi sosial."</p>
                            <p> “Untuk Puspaga sendiri berfungsi untuk meningkatkan kemampuan keluarga dalam mengasuh
                                dan melindungi anak dengan memberikan rujukan pengasuhan, pendidikan, kesehatan,
                                maupun perlindungan untuk anak serta orang tua, agar anak dapat tumbuh dan
                                berkembang dengan optimal."</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="carousel-control-container d-none">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- End Carousel -->
        </div>
        <div class="row">
            <div class="col-12 p-4 text-center">
                <h2>
                    Content
                </h2>
            </div>
        </div>
    </div>
@endsection
