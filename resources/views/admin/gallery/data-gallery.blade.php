@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Data Gallery</h1>
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
                        <a href="#" type="button" data-toggle="modal" data-target="#tambahModal"
                            class="btn btn-primary btn-rounded"><i class="fa-solid fa-plus fa-beat"></i>
                            Tambah Gallery</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Data Gallery</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Admin</th>
                                            <th>Gambar Gallery</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($gallery as $item)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $item->deskripsi }}
                                                </td>
                                                <td>{{ $item->kategori_gallery }}
                                                </td>
                                                <td>{{ $item->users->name }}</td>
                                                <td><img src="{{ URL::asset('uploads/' . $item->gambar_gallery) }}"
                                                        width="100"></td>
                                                <td>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#editModal-{{ $item->id }}"
                                                        class="btn btn-warning btn-xs">
                                                        <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                                    </a>
                                                    <a rel="" data-id="" data-name=""
                                                        href="{{ url('/data-gallery/delete') . '/' . $item->id }}"
                                                        id="deleteArtikel" class="btn btn-danger btn-xs delete"><i
                                                            class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Admin</th>
                                            <th>Gambar Gallery</th>
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
    <!-- Modal Tambah Gallery Berita -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Gallery</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/data-gallery/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi Gallery</label>
                            <input type="text" name="deskripsi" id="deskripsi"
                                class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Event" autofocus
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="kategori_gallery">Kategori</label>
                            <select id="kategori_gallery" name="kategori_gallery"
                                class="form-control @error('kategori_gallery') is-invalid @enderror">
                                <option value="0">Pilih Album</option>
                                <option value="Event">Event</option>
                                <option value="Acara">Acara</option>
                                <option value="Pentas">Pentas</option>
                                <option value="Konser">Konser</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gambar_gallery" class="form-label">Gambar Gallery</label>
                            <input type="file" name="gambar_gallery" id="gambar_gallery"
                                class="form-control @error('gambar_gallery') is-invalid @enderror" placeholder="Event"
                                autofocus required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    @foreach ($gallery as $data)
        <div class="modal fade" id="editModal-{{ $data->id }}" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Gallery</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/data-gallery/update/' . $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi Kategori</label>
                                <input type="text" name="deskripsi" id="deskripsi"
                                    class="form-control @error('deskripsi') is-invalid @enderror"
                                    value="{{ $data->deskripsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_gallery">Kategori</label>
                                <select id="kategori_gallery" name="kategori_gallery"
                                    class="form-control @error('kategori_gallery') is-invalid @enderror">
                                    <option value={{ $data->kategori_gallery }}>{{ $data->kategori_gallery }}</option>
                                    <option value="Event">Event</option>
                                    <option value="Acara">Acara</option>
                                    <option value="Pentas">Pentas</option>
                                    <option value="Konser">Konser</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar_gallery" class="form-label">Gambar Gallery</label>
                                <input type="file" name="gambar_gallery" id="gambar_gallery"
                                    class="form-control @error('gambar_gallery') is-invalid @enderror"
                                    placeholder="Event">
                            </div>
                            <div class="mb-3">
                                <label for="gambar_gallery" class="form-label">Gambar Gallery Saat Ini</label>
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('uploads/' . $item->gambar_gallery) }}" width="100">
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
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
