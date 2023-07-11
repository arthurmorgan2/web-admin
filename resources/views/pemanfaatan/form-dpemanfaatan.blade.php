@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Input Data Pemanfaatan</h3>
                            </div>
                            <!-- Form Input Pemanfaatan -->
                            <form action="/simpan-dpemanfaatan" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" id="kabupaten" name="kabupaten" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" id="kapanewon" name="kapanewon" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" id="kelurahan" name="kelurahan" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Perizininan</label>
                                        <input type="text" id="kode_perizinan" name="kode_perizinan" class="form-control"
                                            placeholder="Kode perizinan" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten:</label>
                                        <select id="kabupaten-input-form" class="form-control form-select select2">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kapanewon:</label>
                                        <select id="kapanewon-input-form" class="form-control form-select select2">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kalurahan:</label>
                                        <select id="kelurahan-input-form" class="form-control form-select select2">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <input type="text" id="desa" name="desa" class="form-control"
                                            placeholder="Desa" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Sertifikat/persil</label>
                                        <input type="text" id="persil" name="persil" class="form-control"
                                            placeholder="Sertifikat/persil" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Luas</label>
                                        <input type="text" id="luas" name="luas" class="form-control"
                                            placeholder="Luas" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Uraian</label>
                                        <input type="text" id="uraian" name="uraian" class="form-control"
                                            placeholder="Uraian" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Mulai</label>
                                        <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control"
                                            placeholder="tanggal-mulai" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Akhir</label>
                                        <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control"
                                            placeholder="tanggal-akhir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="files" class="form-label">Upload SK:</label>
                                        <div class="input-group hdtuto control-group lst increment">
                                            <input type="file" class="form-control" name="file_SK" required>
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
                                            <div class="form-group">
                                                <label for="files" class="form-label">Upload SK: (opsional)</label>
                                                <div class="input-group hdtuto control-group lst increment">
                                                    <input type="file" class="form-control" name="file_SK_5">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                                        </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.select2')
@endsection
