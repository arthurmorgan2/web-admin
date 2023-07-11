@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Input Data Pengawasan</h3>
                            </div>
                            <!-- form start -->
                            <form action="{{ route('simpan-Pengawasan') }}" method="POST" enctype="multipart/form-data">
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
                                        <label>Kabupaten:</label>
                                        <select id="kabupaten-input-form" class="form-select form-select-lg mb-3">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kapanewon:</label>
                                        <select id="kapanewon-input-form" class="form-select form-select-lg mb-3">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kalurahan:</label>
                                        <select id="kelurahan-input-form" class="form-select form-select-lg mb-3">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Pengawasan:</label>
                                        <input type="text" id="tahun_pengawasan" name="tahun_pengawasan"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor SK :</label>
                                        <input type="text" id="nomor_sk" name="nomor_sk" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal SK:</label>
                                        <input type="date" id="tanggal_sk" name="tanggal_sk" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Bentuk Pemanfaatan :</label>
                                        <input type="text" id="bentuk_pemanfaatan" name="bentuk_pemanfaatan"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pengelola:</label>
                                        <input type="text" id="pengelola" name="pengelola" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Persil Klas:</label>
                                        <input type="text" id="persil_klas" name="persil_klas" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Sertifikat:</label>
                                        <input type="text" id="nomor_sertifikat" name="nomor_sertifikat"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Pemanfaatan:</label>
                                        <input type="text" id="luas_pemanfaatan" name="luas_pemanfaatan"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Keseluruhan:</label>
                                        <input type="text" id="luas_keseluruhan" name="luas_keseluruhan"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Bidang :</label>
                                        <input type="text" id="jumlah_bidang" name="jumlah_bidang" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi:</label>
                                        <input type="text" id="lokasi" name="lokasi" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Koordinat:</label>
                                        <input type="text" id="koordinat" name="koordinat" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jangka Waktu:</label>
                                        <input type="text" id="jktwaktu" name="jktwaktu" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Sk:</label>
                                        <input type="text" id="jenis_sk" name="jenis_sk" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tindak Lanjut:</label>
                                        <input type="text" id="tdklanjut" name="tdklanjut" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kesesuaian:</label>
                                        <input type="text" id="kesesuaian" name="kesesuaian" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan
                                        Data</button>
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
