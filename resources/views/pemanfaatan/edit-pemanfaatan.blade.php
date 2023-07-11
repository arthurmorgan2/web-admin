@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="content-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Pemanfaatan</h3>
                            </div>
                            <!-- Form Edit Pemanfaatan -->
                            @foreach ($dpemanfaatan as $item)
                                <form action="{{ url('/updatepemanfaatan/' . $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kabupaten" name="kabupaten" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kapanewon" name="kapanewon" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="hidden" id="kelurahan" name="kelurahan" class="form-control"
                                                required>
                                        </div>
                                        <div class="pform-group mb-3">
                                            <label>Kode Perizinan</label>
                                            <input type="text" id="kode_perizinan" name="kode_perizinan"
                                                class="form-control" placeholder="kode perizinan"
                                                value="{{ $item->kode_perizinan }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten:</label>
                                            <input type="text" id="kabupaten" name="kabupaten" class="form-control"
                                                value="{{ $item->kabupaten }}" disabled />
                                            <select id="kabupaten-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kabupaten }}">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kapanewon:</label>
                                            <input type="text" id="kapanewon" name="kapanewon" class="form-control"
                                                value="{{ $item->kapanewon }}" disabled />
                                            <select id="kapanewon-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kapanewon }}">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kalurahan:</label>
                                            <input type="text" id="kelurahan" name="kelurahan" class="form-control"
                                                value="{{ $item->kelurahan }}" disabled />
                                            <select id="kelurahan-input-form" class="form-select form-select-lg mb-3"
                                                value="{{ $item->kelurahan }}">
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Desa</label>
                                            <input type="text" id="desa" name="desa" class="form-control"
                                                placeholder="Desa" value="{{ $item->desa }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Persil</label>
                                            <input type="text" id="persil" name="persil" class="form-control"
                                                placeholder="sertifikat/persil" value="{{ $item->persil }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Luas</label>
                                            <input type="text" id="luas" name="luas" class="form-control"
                                                placeholder="luas" value="{{ $item->luas }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Uraian</label>
                                            <input type="text" id="uraian" name="uraian" class="form-control"
                                                placeholder="uraian" value="{{ $item->uraian }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tanggal Mulai</label>
                                            <input type="date" id="tanggal_mulai" name="tanggal_mulai"
                                                class="form-control" placeholder="tanggal-mulai"
                                                value="{{ $item->tanggal_mulai }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tahun Akhir</label>
                                            <input type="date" id="tanggal_akhir" name="tanggal_akhir"
                                                class="form-control" placeholder="tanggal-akhir"
                                                value="{{ $item->tanggal_akhir }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>File SK</label>
                                            <input type="file" id="file_SK" name="file_SK" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK/' . $item->file_SK) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 2</label>
                                            <input type="file" id="file_SK" name="file_SK_2" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_2 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_2/' . $item->file_SK_2) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 3</label>
                                            <input type="file" id="file_SK" name="file_SK_3" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_3 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_3/' . $item->file_SK_3) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 4</label>
                                            <input type="file" id="file_SK" name="file_SK_4" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_4 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_4/' . $item->file_SK_4) }}" width="200"
                                            alt="file kosong">
                                        <div class="form-group mb-3">
                                            <label>File SK 5</label>
                                            <input type="file" id="file_SK_5" name="file_SK_5" class="form-control"
                                                placeholder="File SK" value="{{ $item->file_SK_5 }}">
                                        </div>
                                        <p>File SK Saat Ini</p>
                                        <img src="{{ asset('uploads/file_SK_5/' . $item->file_SK_5) }}" width="200"
                                            alt="file kosong">
                                        <br>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Ubah Data</button>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.select2')
@endsection


