@extends('layouts.client.app')
@section('content')
    <!-- Carousel -->
    <div class="container-fluid px-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/gambar1.jpg') }}" class="d-block w-100 h-250" alt="..." loading="lazy">
                    <div class="container">
                        <div class="carousel-caption caption-1 text-center p-4">
                            <div class="hidden-md fw-bold carousel-caption-title">Balai Perlindungan Perempuan Dan Anak
                            </div>
                            <div class="carousel-caption-description">Balai Pelindungan Perempuan Dan Anak DP3AP2 Daerah
                                Istimewa
                                Yogyakarta mempunyai tugas untuk memberikan pertolongan berupa pemberian konsultasi,
                                bantuan
                                hukum dan pemulihan psikologis korban secara gratis, karena Korban kekerasan harus
                                segera
                                mendapatkan pertolongan, pendampingan dan keadilan hukum.</div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/gambar2.jpg') }}" class="d-block w-100 h-250" alt="..." loading="lazy">
                    <div class="container">
                        <div class="carousel-caption caption-2 text-center p-4">
                            <div class="hidden-md fw-bold carousel-caption-title">RDU, Puspaga, Dan SAPA 129</div>
                            <div class="carousel-caption-description">
                                “RDU (Rekso Dyah Utami) sendiri berfungsi untuk
                                menyelenggarakan pelayanan
                                terpadu kepada perempuan dan anak korban kekerasan dengan memfasilitasi pelayanan
                                pengaduan, rehabilitasi kesehatan, rehabilitasi sosial, bantuan hukum, pemulangan
                                dan reintegrasi sosial."
                                <br>
                                “Untuk Puspaga sendiri berfungsi untuk meningkatkan kemampuan keluarga dalam mengasuh
                                dan melindungi anak dengan memberikan rujukan pengasuhan, pendidikan, kesehatan,
                                maupun perlindungan untuk anak serta orang tua, agar anak dapat tumbuh dan
                                berkembang dengan optimal."
                                <br>
                                "Dan untuk SAPA 129 berfungsi sebagai layanan pelapor dan pengaduan bagi korban kasus
                                kekerasan terhadap perempuan dan anak, pendataan kasus serta mengintegrasikan layanan
                                perlindungan perempuan dan anak di pusat dan daerah."

                            </div>
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
                    <div class="row my-4">
                        <div class="col">
                            <div class="layanan-main-title fw-bold">LAYANAN BALAI PPA DIY</div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-10">
                            <div class="layanan-main-description">
                                Merupakan upaya penanganan untuk
                                melindungi dan memenuhi hak perempuan dan anak dari segala bentuk tindak kekerasan,
                                diskriminasi, perlindungan khusus, dan masalah seperti: </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center mt-4">
                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Pengaduan</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-person-harassing fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Layanan Pengaduan di Balai PPA Daerah
                        Istimewa Yogyakarta merupakan tahapan
                        pertama korban untuk menyampikan informasi
                        ,dalam menyampaikan informasi tersebut
                        korban di minta untuk menyampaikan
                        keluhan atas masalah korban.
                    </div>
                </div>
                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Penjangkauan</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-people-arrows fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Layanan Penjangkauan dalam Balai PPA
                        Daerah Istimewa Yogyakarta itu merupakan
                        upaya petugas untuk mendatangi korban atau
                        pihak terkait yang tidak bisa mengakses layanan
                        langsung ke kantor.
                    </div>
                </div>
                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Pengelolaan Kasus</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-handcuffs fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Layanan yang mengidentifikasi semua kasus
                        dalam aspek kasus korban untuk memberikan layanan
                        yang sesuai dengan kebutuhan dan keperluan korban.
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center my-5">

                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Pendampingan</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-people-group fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Layanan bantuan psikologis sosial, hukum, untuk
                        membantu, melindungi, meringankan dan
                        memulihkan kondisi fisik, psikologis mental dan sosial.
                        serta spiritaul sehingga mampu menjalankan
                        kehidupan yang normal kembali.

                    </div>
                </div>
                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Mediasi</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-comments fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Proses sistematis bermusyawarah untuk
                        para korban yang di fasilitasi oleh pihak ketiga
                        (mediator) untuk mencapai kesepakatan bersama.
                    </div>
                </div>
                <div class="col-md-3 layanan-box d-flex flex-column justify-content-center align-items-center">
                    <div class="layanan-title text-center">Layanan Penampungan Sementara</div>
                    <div class="layanan-icon">
                        <i class="fa-solid fa-tents fa-2xl"></i>
                    </div>
                    <div class="layanan-desciption text-center">
                        Layanan penampungan ditunjukan untuk
                        menampung korban sementara yang sedang
                        terancam keselamatannya dan membutuhkan
                        tempat tinggal sementara.
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center my-5">
                <div class="col-md-3 layanan-box-link d-flex flex-column align-items-center">
                    <a href="https://www.rdu.or.id/" class="text-decoration-none text-reset" target="_blank">
                        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid my-4" alt="">
                        <div class="text-center mt-4">

                            <div class="layanan-titler">RDU (Rekso Dyah Utami)</div>
                            <div class="layanan-desciption">“RDU sendiri merupakan Pusat layanan tindak
                                kekerasan perempuan dan anak korban."</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 layanan-box-link d-flex flex-column justify-content-center align-items-center">
                    <a href="/layanan/puspaga" class="text-decoration-none text-reset" target="_blank">
                        <img src="{{ asset('assets/img/logo2.png') }}" class="img-fluid" alt="">
                        <div class="text-center mt-4">
                            <div class="layanan-title">PUSPAGA</div>
                            <div class="layanan-desciption">“Puspaga merupakan layanan konseling psikologi
                                terkait pengasuhan, tumbuh kembang anak, remaja,
                                serta permasalahan perempuan dan keluarga."</div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 layanan-box-link d-flex flex-column justify-content-center align-items-center">
                    <a href="/layanan/sapa129" class="text-decoration-none text-reset" target="_blank">
                        <div class="row d-flex justify-content-center">
                            <div class="col-6">
                                <img src="{{ asset('assets/img/sapa.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="layanan-title">SAPA 129</div>
                            <div class="layanan-desciption">“SAPA 129 merupakan layanan untuk mempermudah akses bagi korban
                                atau perlapor untuk pengaduan kasus kekerasan terhadap perempuan dan anak, pendataan kasus
                                serta mengintegrasikan layanan perlindungan perempuan dan anak di pusat dan daerah."</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
