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
                    @foreach ($artikel as $item)
                        <form action="{{ url('/data-artikel/edit/update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row mb-4">
                                <div class="col-2  d-flex justify-content-left align-items-center">
                                    <div class="label">Judul</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline">
                                        <input type="text" name="judul" id="judul"
                                            class="form-control @error('judul') is-invalid judul @enderror"
                                            placeholder="Judul Artikel" value="{{ $item->judul }}" autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2  d-flex justify-content-left align-items-center">
                                    <div class="label">Kategori</div>
                                </div>

                                <div class="col-4">
                                    <select name="kategori_id"
                                        class="form-select form-control @error('kategori_id') is-invalid @enderror"
                                        value="{{ $item->kategori }}">
                                        @foreach ($kategori as $row)
                                            @if ($row->id == $item->kategori_id)
                                                <option value="{{ $row->id }}" selected='selected'>
                                                    {{ $row->nama_kategori }}</option>
                                            @else
                                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}
                                                </option>
                                            @endif
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
                                            placeholder="Isi Artikel Berita">{{ $item->body }} </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-2  d-flex justify-content-left">
                                    <div class="label">Sumber Berita</div>
                                </div>
                                <div class="col-8">
                                    <div class="form-outline">
                                        <input type="text" name="sumber" id="sumber"
                                            class="form-control @error('body') is-invalid body @enderror"
                                            placeholder="Sumber Berita" value="{{ $item->sumber }}">
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
                            <div class="row mb-4">
                                <div class="col-2  d-flex justify-content-left align-items-center">
                                    <div class="label">Gambar Artikel Berita Saat Ini</div>
                                </div>
                                <div class="col-6">
                                    <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" width="100">
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
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
