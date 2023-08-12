@extends('layouts.client.app')
@section('content')
    <div class="container-fluid container-gallery">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item link-gallery-box {{ request()->is('gallery') ? 'link-gallery-req' : '' }}">
                        <a class="nav-link link-gallery text-reset text-decoration-none" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item link-gallery-box {{ request()->is('video') ? 'link-gallery-req' : '' }}">
                        <a class="nav-link link-gallery text-reset text-decoration-none" href="/video">Video</a>
                    </li>
                </ul>

            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 mt-0 m-4 fw-bold gallery-section">
                        Daftar Video
                    </div>
                </div>
                <div class="row px-3">
                    @forelse ($video as $item)
                        <div class="col-md-5 mb-4">
                            <div class="card card-video">
                                <div class="video-container">
                                    <iframe class="video" src="{{ url($item->link) }}" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <h5 class="card-title mt-3">{{ $item->judul }}</h5>
                                <p class="card-text">{{ Str::words($item->deskripsi, 20, '...') }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="card-text text-center">~ Video Tidak Tersedia ~</div>
                        </div>
                    @endforelse

                </div>
                <div class="col-md-10 d-flex justify-content-center">
                    {{ $video->links() }}
                </div>
            </div>
        </div>


    </div>
@endsection
