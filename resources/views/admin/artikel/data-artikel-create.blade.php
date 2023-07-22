@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 m-2">
                        <h1 class="title m-0">Form Data Artikel</h1>
                    </div>
                </div>

                <div class="container">
                    <form action="/data-artikel/create/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-2  d-flex justify-content-left align-items-center">
                                <div class="label">Judul</div>
                            </div>
                            <div class="col-8">
                                <div class="form-outline">
                                    <input type="text" name="judul" id="judul"
                                        class="form-control @error('judul') is-invalid judul @enderror"
                                        placeholder="Judul Artikel" autofocus required />
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2  d-flex justify-content-left align-items-center">
                                <div class="label">Kategori</div>
                            </div>

                            <div class="col-4">
                                <select name="kategori_id"
                                    class="form-select form-control @error('kategori_id') is-invalid @enderror" required>
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2  d-flex justify-content-left">
                                <div class="label">Isi Artikel</div>
                            </div>
                            <div class="col-8">
                                <div class="form-outline">
                                    <textarea type="text" name="body" id="mytextarea" class="form-control @error('body') is-invalid body @enderror"
                                        placeholder="Isi Artikel Berita" required> </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-2  d-flex justify-content-left align-items-center">
                                <div class="label">Gambar Artikel Berita</div>
                            </div>
                            <div class="col-8">
                                <div class="form-outline">
                                    <input type="file" name="gambar_artikel" id="gambar_artikel" alt="no picture..."
                                        class="form-control @error('judul') is-invalid @enderror" />
                                </div>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <div class="row">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                            </div>
                            <div class="col-3">
                                <a href="/data-artikel" class="btn btn-warning btn-block mb-4">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
