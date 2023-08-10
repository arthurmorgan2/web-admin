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
                        Daftar Video
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
