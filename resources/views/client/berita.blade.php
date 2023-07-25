@extends('layouts.client.app')
@section('content')
    <!-- Carousel -->
    <div class="container container-berita">
        <div class="row">
            <div class="col-md-12 p-4 text-center">
                <div class="berita-title-section fw-bold">
                    Informasi <span class="title-underline">Terkini</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="form form-search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input" placeholder="Cari Berita...">
                    <span class="left-pan"><i class="fa fa-microphone"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach ($artikel as $item)
                    <a href="{{ url('/berita/' . $item->slug) }}" class="text-reset text-decoration-none">
                        <div class="row p-3 mb-2 container-post">
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <img class="img-thumbnail rounded-3" src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                    alt="img-post">
                            </div>
                            <div class="col-md-9 p-2">
                                <div class="row">
                                    <div class="col-sm-4 post-date">
                                        <i class="fa-solid fa-calendar-days px-2"></i>
                                        {{ date('d M Y', strtotime($item->created_at)) }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mx-2 post-title">
                                        {{ Str::words($item->judul, 12, '...') }}

                                    </div>
                                </div>
                                <hr class="m-0">
                                <div class="row">
                                    <div class="col m-2 post-description">
                                        {{ Str::words($item->body, 26, '...') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach


            </div>
            <div class="col-md-1 text-center">
                <div class="vr"></div>
            </div>
            <div class="col-4 col-md-3 populer-title-section fw-bold">
                <div class="row">
                    <div class="col">
                        Berita <span class="title-underline">Terpopuler</span>
                    </div>
                </div>
                @foreach ($post_populer as $item)
                    <a href="{{ url('/berita/' . $item->slug) }}" class="text-reset text-decoration-none">

                        <div class="row my-3 p-2 container-post">
                            <div class=" col-md-5 d-flex justify-content-center align-items-center">
                                <img class="img-thumbnail" src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                    alt="img-populer">
                            </div>
                            <div class="col-md-7 p-0">
                                <div class="row mb-2">
                                    <div class="col post-populer-title">
                                        {{ Str::words($item->judul, 5, ' ...') }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col post-views">
                                        <i class="fa-solid fa-eye"></i> <span class="fw-bold">{{ $item->views }}</span>
                                        Kali Dibaca
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

    </div>
@endsection
