@extends('layouts.client.app')
@section('content')
    <div class="container container-gallery">
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
                        Daftar Foto
                    </div>
                </div>
                <div class="row mt-0 m-4">
                    @forelse ($gallery as $item)
                        <div class="col-md-6 p-3">
                            <div class="card card-gallery-content">
                                <div class="img-container d-flex justify-content-center align-items-center p-2">
                                    <img src="{{ asset('uploads/' . $item->gambar_gallery) }}" class="card-img-top"
                                        alt="no picture...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::words($item->deskripsi, 20, '...') }}</h5>
                                    <p class="card-text"> {{ date('d M Y', strtotime($item->created_at)) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="card-text text-center">~ Foto Tidak Tersedia ~</div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>


    </div>
@endsection
