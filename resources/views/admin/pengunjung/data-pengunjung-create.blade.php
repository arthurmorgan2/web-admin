@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 m-2">
                        <h1 class="title m-0">Form Data Pengunjung</h1>
                    </div>
                </div>

                <div class="container">
                    <form action="/data-pengunjung/create/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap"
                                class="form-control @error('nama_lengkap') is-invalid @enderror">
                        </div>

                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" id="umur" name="umur"
                                class="form-control @error('umur') is-invalid @enderror">
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <select id="pekerjaan" name="pekerjaan"
                                class="form-control @error('pekerjaan') is-invalid @enderror">
                                <option value="0">Pilih Pekerjaan</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="konsultasi bidang">Konsultasi Bidang</label>
                            <select id="konsultasi_bidang" name="konsultasi_bidang"
                                class="form-control @error('konsultasi_bidang') is-invalid @enderror">
                                <option value="o">Pilih Bidang</option>
                                <option value="Puspaga">Puspaga</option>
                                <option value="RDU">RDU</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Konsultasi</label>
                            <textarea class="form-control @error('konsultasi') is-invalid @enderror" id="konsultasi" name="konsultasi"
                                rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
