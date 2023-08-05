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
                    <div class="col-md-6 bg-success p-3">
                        <div class="card">
                            <div class="img-container">
                                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-success p-3">
                        <div class="card">
                            <div class="img-container">
                                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-success p-3">
                        <div class="card">
                            <div class="img-container">
                                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-success p-3">
                        <div class="card">
                            <div class="img-container">
                                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
