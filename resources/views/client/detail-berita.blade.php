@extends('layouts.client.app')
@section('content')
    <div class="container container-berita">
        <div class="row my-3">
            <div class="col-md-8">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center bg-success">
                        <div class="img-detail">
                            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt="img-detail"
                                class="img-fluid rounded">

                        </div>
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <div class="post-date">
                            <i class="fa-solid fa-user mx-1" style="color: #324b77;"></i>
                            <span>{{ $artikel->users->name }}</span>
                            <i class="fa-solid fa-calendar-days px-2"></i><span>{{ date('d M Y', strtotime($artikel->created_at)) }}
                            </span>
                        </div>
                    </div>

                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="post-title">
                            {{ $artikel->judul }}
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="post-description">
                            {{ $artikel->body }}
                        </div>
                    </div>
                </div>
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
