@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Data Pengunjung</h1>
                    </div>
                </div>
                <hr>
                @if (session()->has('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif
                @if (session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
                <div class="row m-3">
                    <div class="col-sm-6">
                        <a href="/data-pengunjung/create/show" class="btn btn-primary btn-rounded"><i
                                class="fa-solid fa-plus fa-beat"></i>
                            Tambah
                            Data Pengunjung</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Data Pengunjung</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Konsultasi Bidang</th>
                                            <th>Alamat</th>
                                            <th>Konsultasi</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>

                                        @foreach ($pengunjung as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->nama_lengkap }}</td>
                                                <td>{{ $item->umur }}</td>
                                                <td>{{ $item->pekerjaan }}</td>
                                                <td>{{ $item->konsultasi_bidang }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->konsultasi }}</td>
                                                <td>
                                                    <a href="{{ url('/data-pengunjung/edit') . '/' . $item->id }}"
                                                        class="btn btn-warning btn-xs">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                    </a>
                                                    <a rel="" data-id="" data-name=""
                                                        href="{{ url('/data-pengunjung/delete') . '/' . $item->id }}"
                                                        id="deleteArtikel" class="btn btn-danger btn-xs delete"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Konsultasi Bidang</th>
                                            <th>Alamat</th>
                                            <th>Konsultasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "excel", "pdf", "print", "colvis"]
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
@endsection
