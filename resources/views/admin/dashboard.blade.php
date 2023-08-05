@extends('layouts.admin.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="title m-0">Dashboard</h1>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $views }}</h3>

                                <p>Artikel Views</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/data-artikel" class="small-box-footer">Selengkapnya <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $artikel }}</h3>

                                <p>Jumlah Artikel</p>
                            </div>
                            <div class="icon">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>
                            <a href="/data-artikel" class="small-box-footer">Selengkapnya <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $pengunjung }}</h3>
                                <p>Data Pengunjung Hari ini</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/data-pengunjung" class="small-box-footer">Selengkapnya <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <canvas id="myChart"></canvas>
                    </div>

                    <script src="{{ mix('/js/app.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
@endsection
