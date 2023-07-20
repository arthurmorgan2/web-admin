<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Administrasi Balai PPA DP3AP2 DIY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('AdminLTE') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/e6cac57b1a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.jpg') }}">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #ac0606">
        <div class="container">
            <a class="navbar-brand"><img src="{{ asset('assets/img/LOGO1.png') }}" width="300px" height="45px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3 ms-auto">
                    <li class="nav-item" style="margin-right: 25px; margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="/">
                            <p>HOME</p>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 25px; margin-top:15px">
                        <a class="nav-link active text-white" aria-current="page" href="/daftar-pengunjung" &raquo;>
                            <p>DAFTAR PENGUNJUNG</p>
                        </a>
                    </li>

                    <li class="nav-item" style="margin-right: 5px;margin-top:15px">
                        <a class="nav-link active text-white btn" id="tombol"
                            style=" border-radius: 10px; padding-right:20px;
                            padding-left:20px;font-family:serif"
                            aria-current="page" href="/login">LOGIN</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <Main>
        <div class="container-fluid">
            <div class="row p-4">
                <div class="col-12">
                    <h3 class="title text-center fw-bold">
                        <span class="pendaftaran-online-underline">Pendaftaran Pengunjung</span> Balai PPA
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if (session()->has('success'))
                        <div class="alert alert-info">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
            {{-- Form Content --}}
            <div class="container">
                <div class="row p-3">
                    <div class="col-12">
                        {{-- Form Pendaftaran Content --}}
                        <form action="/daftar-pengunjung/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Nama Lengkap</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                    class="form-control @error('nama_lengkap') is-invalid @enderror"
                                                    autofocus required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Umur</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <input type="number" name="umur" id="umur"
                                                    class="form-control @error('umur') is-invalid @enderror" autofocus
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Pilih Pekerjaan</div>
                                        </div>
                                        <div class="col-8">
                                            <select class="form-select @error('pekerjaan') is-invalid @enderror"
                                                name="pekerjaan" id="pekerjaan" aria-label="Default select example"
                                                required>
                                                <option selected>Pilih Pekerjaan</option>
                                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                                <option value="Wiraswasta">Wiraswasta</option>
                                                <option value="Pedagang">Pedagang</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Konsultasi Bidang</div>
                                        </div>
                                        <div class="col-8">
                                            <select
                                                class="form-select @error('konsultasi_bidang') is-invalid @enderror"
                                                name="konsultasi_bidang" id="konsultasi_bidang"
                                                aria-label="Default select example" required>
                                                <option selected>Pilih Konsultasi Bidang</option>
                                                <option value="RDU">RDU</option>
                                                <option value="Puspaga">Puspaga</option>s
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Alamat Lengkap</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <textarea type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-4  d-flex justify-content-left align-items-center">
                                            <div class="label">Konsultasi</div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-outline">
                                                <textarea type="text" id="konsultasi" name="konsultasi"
                                                    class="form-control @error('alamat') is-invalid @enderror" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="row justify-content-center">
                                        <div class="col-5">
                                            <button type="submit"
                                                class="btn btn-primary btn-block w-100">Daftar</button>
                                        </div>
                                        <div class="col-5">
                                            <a href="/pendaftaran-online" class="btn btn-warning btn-block w-100"
                                                style="color: white">Kembali</a>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <footer>
            <div class="footer myfooter">
                <div class="w-100">
                    <div _ngcontent-wcl-c173="" class="row justify-content-center pb-3"
                        style="background-color: #ac0606; color: white;">
                        <div _ngcontent-wcl-c173="" class="logo-footer"
                            style="display: flex; justify-content: center;">
                            <img _ngcontent-wcl-c173="" src="{{ asset('assets/img/logo.jpg') }}" alt="logo Pemda DIY"
                                class="float-right mt-2" style="height: 90px;">
                        </div>
                        <div _ngcontent-wcl-c173="" class="col-md-0 text-center">
                            <p _ngcontent-wcl-c173="" class="mt-3 footer-address">
                                <b> BALAI PPA </b>
                                <br _ngcontent-wcl-c173="">
                                <b> Jl. Tentara Rakyat Mataram No.53 </b>
                                <br _ngcontent-wcl-c173="">
                                <b> Telp./Fax: (0274) 5030707 </b>
                                <br _ngcontent-wcl-c173="">
                                <b> Email: bppa@jogjaprov.go.id </b>
                                <br _ngcontent-wcl-c173="">
                                <b> Bumijo, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231 </b>
                            </p>
                        </div>
                    </div>
                    <div class="container-fluid last-content" style="background-color: #8f0707; color: white;">
                        <div class="row">
                            <p class="mt-3" style="text-align: center;">
                                © 2023 Copyright&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Balai Dinas Pemberdayaan
                                Perempuan
                                Perlindungan Anak dan Pengendalian Penduduk Daerah Istimewa Yogyakarta
                            </p>
                        </div>
                    </div>
        </footer>
        <!-- End Footer -->

        <!-- Script Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
        <!--<script src="script.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="{{ asset('AdminLTE') }}/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="{{ asset('AdminLTE') }}/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="{{ asset('AdminLTE') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('AdminLTE') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('AdminLTE') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="{{ asset('AdminLTE') }}/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('AdminLTE') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('AdminLTE') }}/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('AdminLTE') }}/dist/js/pages/dashboard.js"></script>

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('AdminLTE') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js" defer></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/jszip/jszip.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('AdminLTE') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                $("#table1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script>
            $(function() {
                $("#table2").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,

                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>

        <!-- End Script Javascript -->
</body>

</html>
