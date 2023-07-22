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
                    <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100 h-250" alt="...">
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="row mt-4">
                        <div class="col">
                            <h1 class="layanan-title1 fw-bold">LAYANAN BALAI PPA DIY</h1>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-10">
                            <div class="deskripsi-layanan1 p-4">
                                Merupakan upaya penanganan untuk
                                melindungi dan memenuhi hak perempuan dan anak dari segala bentuk tindak kekerasan,
                                diskriminasi, perlindungan khusus, dan masalah seperti: </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <h5 class="text-center">Layanan pengaduan</h5>
                    <p class="text-center">
                        Layanan Pengaduan di Balai PPA Daerah
                        Istimewa Yogyakarta merupakan tahapan
                        pertama korban untuk menyampikan informasi
                        ,dalam menyampaikan informasi tersebut
                        korban di minta untuk menyampaikan
                        keluhan atas masalah korban.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Layanan penjangkauan</h5>
                    <p class="text-center">
                        Layanan Penjangkauan dalam Balai PPA
                        Daerah Istimewa Yogyakarta itu merupakan
                        upaya petugas untuk mendatangi korban atau
                        pihak terkait yang tidak bisa mengakses layanan
                        langsung ke kantor.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Layanan Pengelolaan kasus</h5>
                    <p class="text-center">
                        Layanan yang mengidentifikasi semua kasus
                        dalam aspek kasus korban untuk memberikan layanan
                        yang sesuai dengan kebutuhan dan keperluan korban.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Layanan pendampingan</h5>
                    <p class="text-center">
                        Layanan bantuan psikologis sosial, hukum, untuk
                        membantu, melindungi, meringankan dan
                        memulihkan kondisi fisik, psikologis mental dan sosial.
                        serta spiritaul sehingga mampu menjalankan
                        kehidupan yang normal kembali.

                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Layanan mediasi</h5>
                    <p class="text-center">
                        Proses sistematis bermusyawarah untuk
                        para korban yang di fasilitasi oleh pihak ketiga
                        (mediator) untuk mencapai kesepakatan bersama.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Layanan penampungan sementara</h5>
                    <p class="text-center">
                        Layanan penampungan ditunjukan untuk
                        menampung korban sementara yang sedang
                        terancam keselamatannya dan membutuhkan
                        tempat tinggal sementara.
                    </p>
                </div>
            </div>

            <div class="row p-4 justify-content-md-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="button pasienBaru rounded-3">
                        <div class="row icon">
                            <div class="col d-flex justify-content-center p-3">
                                <i class="fa-solid fa-notes-medical fa-5x" style="color:#036;"></i>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col fw-bold text-center label">
                                <h1>RDU (Rekso Dyah Utami)</h1>
                                <p>“RDU sendiri merupakan Pusat layanan tindak
                                    kekerasan perempuan dan anak korban"</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="button pasienLama rounded-3">
                        <div class="row icon">
                            <div class="col d-flex justify-content-center p-3">
                                <i class="fa-solid fa-house-medical-circle-check fa-5x" style="color: #036;"></i>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col fw-bold text-center label">
                                <h1>PUSPAGA</h1>
                                <p>“Puspaga merupakan layanan konseling psikologi
                                    terkait pengasuhan, tumbuh kembang anak, remaja,
                                    serta permasalahan perempuan dan keluarga."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
