@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Permohonan Izin</h3>
                            </div>
                            <!-- form start -->
                            @foreach ($administrasi as $item)
                                <form action="{{ url('/updateadministrasi/' . $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tanggal Masuk Surat</label>
                                            <input type="text" id="desa" name="desa" class="form-control"
                                                value="{{ $item->desa }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Masuk Surat</label>
                                            <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                                value="{{ $item->tgl_masuk }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tindak Lanjut</label>
                                            <input type="text" id="tindak" name="tindak" class="form-control"
                                                value="{{ $item->tindak }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Pengembalian</label>
                                            <input type="text" id="pengembalian" name="pengembalian" class="form-control"
                                                value="{{ $item->pengembalian }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Proses Kasultanan</label>
                                            <input type="text" id="proses_kasultanan" name="proses_kasultanan"
                                                class="form-control" value="{{ $item->proses_kasultanan }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban Kasultanan</label>
                                            <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan"
                                                class="form-control" value="{{ $item->jawaban_kasultanan }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Proses Biro Hukum</label>
                                            <input type="text" id="proses_biro" name="proses_biro" class="form-control"
                                                value="{{ $item->proses_biro }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jawaban Biro Hukum</label>
                                            <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control"
                                                value="{{ $item->jawaban_biro }}">
                                        </div>
                                        <div class="form-group">
                                            <label>File SK</label>
                                            <input type="file" id="file_SK" name="file_SK" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK/' . $item->file_SK) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group">
                                            <label>File SK 2</label>
                                            <input type="file" id="file_SK" name="file_SK_2" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_2 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group">
                                            <label>File SK 3</label>
                                            <input type="file" id="file_SK" name="file_SK_3" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_3 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group">
                                            <label>File SK 4</label>
                                            <input type="file" id="file_SK" name="file_SK_4" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_4 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group">
                                            <label>File SK 5</label>
                                            <input type="file" id="file_SK_5" name="file_SK_5" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_5 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                            alt="file kosong">
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection