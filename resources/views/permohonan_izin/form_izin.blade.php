@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Input Data Permohonan Izin</h3>
                            </div>
                            <!-- form start -->
                            <form action="{{ route('simpan_administrasi') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <input type="text" id="desa" name="desa" class="form-control"
                                            placeholder="Desa" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Masuk</label>
                                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control"
                                            placeholder="Tangal Masuk" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut</label>
                                        <input type="text" id="tindak" name="tindak" class="form-control"
                                            placeholder="Tindak Lanjut" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengembalian</label>
                                        <input type="text" id="pengembalian" name="pengembalian" class="form-control"
                                            placeholder="Pengembalian" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Proses Kasultanan</label>
                                        <input type="text" id="proses_kasultanan" name="proses_kasultanan"
                                            class="form-control" placeholder="Proses Kasultanan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban Kasultanan</label>
                                        <input type="text" id="jawaban_kasultanan" name="jawaban_kasultanan"
                                            class="form-control" placeholder="Jawaban Kasultanan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Proses Biro Hukum</label>
                                        <input type="text" id="proses_biro" name="proses_biro" class="form-control"
                                            placeholder="Proses Biro Hukum" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jawaban Biro Hukum</label>
                                        <input type="text" id="jawaban_biro" name="jawaban_biro" class="form-control"
                                            placeholder="Jawaban Biro Hukum" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK:</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK: (opsional)</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK_5">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
