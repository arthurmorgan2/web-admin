@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
              <!-- Data Tabel Permohonan Izin -->
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Permohonan Izin</h3>
                            </div>
                            <div class="row mt-4" style="margin-left: 5px;margin-right:2px">

                                <div class="col">
                                    <div class="card-tools">
                                        <a href="{{ route('form_izin') }}" class="btn btn-dark">Tambah Data <i
                                                class="fa fa-plus-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @if (session('flash_message_success'))
                                <div class="alert alert-success">
                                    {{ session('flash_message_success') }}
                                </div>
                            @endif
                            @if (session('flash_message_warning'))
                                <div class="alert alert-warning">
                                    {{ session('flash_message_warning') }}
                                </div>
                            @endif
                            @if (session('flash_message_danger'))
                                <div class="alert alert-danger">
                                    {{ session('flash_message_danger') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Desa</th>
                                            <th rowspan="2">Tanggal Masuk</th>
                                            <th rowspan="2">Tindak Lanjut</th>
                                            <th rowspan="2">Pengembalian</th>
                                            <th colspan="2">Rekomendasi Kasultanan/Kadipaten</th>
                                            <th colspan="2">Rekomendasi Biro Hukum</th>
                                            <th rowspan="2">Surat Rekomendasi Kemonbu</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th>Proses</th>
                                            <th>Jawaban Kasultanan/Kadipaten</th>
                                            <th>Proses</th>
                                            <th>SK GUB/JAWABAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($administrasi as $item)
                                            <tr>
                                                {{-- <td>{{ $item->id }}</td> --}}
                                                <td>{{ $item->desa }}</td>
                                                <td>{{ $item->tgl_masuk }}</td>
                                                <td>{{ $item->tindak }}</td>
                                                <td>{{ $item->pengembalian }}</td>
                                                <td>{{ $item->proses_kasultanan }}</td>
                                                <td>{{ $item->jawaban_kasultanan }}</td>
                                                <td>{{ $item->proses_biro }}</td>
                                                <td>{{ $item->jawaban_biro }}</td>
                                                <td><a href="#" data-toggle="modal"
                                                        data-target="#viewFiles-{{ $item->id }}"
                                                        class="btn btn-warning btn-xs"><i class="bx bx-edit"></i>View
                                                        Files</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('edit', $item->id) }}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ url('hapus', $item->id) }}"
                                                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"><i
                                                            class="fas fa-trash-alt bg-dancer"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Data Tabel Permohonan Izin -->

    <!-- Modal Surat Rekomendasi Kemonbul -->
    @foreach ($administrasi as $item)
        <div class="modal fade" id="viewFiles-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Surat Rekomendasi Kemonbu</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-8 ms-auto"><a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File
                                    1</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK/' . $item->file_SK) }}" width="200">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                    2</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                    3</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                    4</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                    alt="File Kosong">
                            </div>
                            <div class="col-md-3"><a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                    5</a>
                                <br>
                                <img src="{{ URL::asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                    alt="File Kosong">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Surat Rekomendasi Kemonbul -->
    @endforeach
    @include('layouts.select')
@endsection
