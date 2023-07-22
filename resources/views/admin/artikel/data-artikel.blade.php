@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Data Artikel</h1>
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
                        <a href="/data-artikel/create/show" class="btn btn-primary btn-rounded"><i
                                class="fa-solid fa-plus fa-beat"></i>
                            Tambah
                            Data Artikel</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Data Artikel</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Slug</th>
                                            <th>Kategori</th>
                                            <th>Author</th>
                                            <th>Gambar</th>
                                            <th>Tanggal</th>
                                            <th>Views</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($artikel as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->slug }}</td>
                                                <td>{{ $item->kategori->nama_kategori }}</td>
                                                <td>{{ $item->users->name }}</td>
                                                <td><img src="{{ URL::asset('uploads/' . $item->gambar_artikel) }}"
                                                        width="100"></td>
                                                <td>{{ date('d M Y', strtotime($item->updated_at)) }}</td>
                                                <td>{{ $item->views }}</td>

                                                <td>
                                                    <a href="{{ url('/data-artikel/edit', $item->id) }}"
                                                        class="btn btn-warning btn-xs">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                    </a>
                                                    <a rel="" data-id="" data-name=""
                                                        href="{{ url('/data-artikel/delete', $item->id) }}"
                                                        id="deleteArtikel" class="btn btn-danger btn-xs delete"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Slug</th>
                                            <th>Kategori</th>
                                            <th>Author</th>
                                            <th>Gambar</th>
                                            <th>Tanggal</th>
                                            <th>Views</th>
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
