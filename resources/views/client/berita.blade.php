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
                    <div class="row p-3 mb-2 container-post">
                        <div class="col-md-3 d-flex justify-content-center align-items-top">
                            <a href="">
                                <img class="img-thumbnail rounded-3" src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                    alt="img-post">
                            </a>
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
                                    {{ $item->judul }}
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="row">
                                <div class="col m-2 post-description">
                                    {{ Str::words($item->body, 15, ' ...') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="col-md-1 text-center">
                <div class="vr"></div>
            </div>
            <div class="col-md-3 populer-title-section fw-bold">
                <div class="row">
                    <div class="col">
                        Berita <span class="title-underline">Terpopuler</span>
                    </div>
                </div>
                <div class="row mt-3 container-post">

                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <img class="img-thumbnail" src="https://picsum.photos/200/150" alt="">
                    </div>
                    <div class="col-md-7 p-0">
                        <div class="row mb-2">
                            <div class="col post-populer-title">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident, eaque aut corporis

                            </div>
                        </div>
                        <div class="row">
                            <div class="col post-views">
                                <i class="fa-solid fa-eye"></i> <span class="fw-bold">100000</span> Kali Dibaca
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 container-post">

                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <img class="img-thumbnail" src="https://picsum.photos/200/150" alt="">
                    </div>
                    <div class="col-md-7 p-0">
                        <div class="row mb-2">
                            <div class="col post-populer-title">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident, eaque aut corporis

                            </div>
                        </div>
                        <div class="row">
                            <div class="col post-views">
                                <i class="fa-solid fa-eye"></i> <span class="fw-bold">100000</span> Kali Dibaca
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3 container-post">

                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <img class="img-thumbnail" src="https://picsum.photos/200/150" alt="">
                    </div>
                    <div class="col-md-7 p-0">
                        <div class="row mb-2">
                            <div class="col post-populer-title">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident, eaque aut corporis

                            </div>
                        </div>
                        <div class="row">
                            <div class="col post-views">
                                <i class="fa-solid fa-eye"></i> <span class="fw-bold">100000</span> Kali Dibaca
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
