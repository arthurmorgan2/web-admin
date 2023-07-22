@extends('layouts.client.app')
@section('content')
    <div class="container-fluid container-pengunjung">
        <div class="row p-4">
            <div class="col-12">
                <div class="pengunjung-title text-center fw-bold">
                    <span class="pengunjung-underline">Pendaftaran Pengunjung</span> Balai PPA
                </div>
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
                                                class="form-control @error('nama_lengkap') is-invalid @enderror" autofocus
                                                required />
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
                                            name="pekerjaan" id="pekerjaan" aria-label="Default select example" required>
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
                                        <select class="form-select @error('konsultasi_bidang') is-invalid @enderror"
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
                                            <textarea type="text" id="konsultasi" name="konsultasi" class="form-control @error('alamat') is-invalid @enderror"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Submit button -->
                                <div class="row justify-content-center">
                                    <div class="col-5">
                                        <button type="submit" class="btn btn-primary btn-block w-100">Daftar</button>
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
@endsection
