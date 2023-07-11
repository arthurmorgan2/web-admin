@extends('layouts.app')
@section('content')

    <!-- Content Header Dashboard Admin -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Content Header Dashboard Admin -->

    <!-- Konten Chart Pie Chart -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <script type="text/javascript">
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                const charData = {!! json_encode($chartData, JSON_HEX_TAG) !!};
                                console.log(charData, 'here')
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ...charData.map(it => [it.kabupaten, it.total_kabupaten])
                                ]);

                                var options = {
                                    title: 'Kabupaten Chart Pemanfaatan'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                chart.draw(data, options);
                            }
                        </script>

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                const charData = {!! json_encode($charData, JSON_HEX_TAG) !!};
                                console.log(charData, 'here')
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ...charData.map(it => [it.kabupaten, it.total_kabupaten])
                                ]);

                                var options = {
                                    title: 'Kabupaten Chart Pengawasan'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

                                chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
    <!-- End Konten Pie Chart -->

    <!-- Konten Score Chart -->
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $administrasi }}</h3>

                                <p>Permohonan Izin</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-edit"></i>
                            </div>
                            <a href="{{ route('tabel_izin') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $pengawasan }}</h3>

                                <p>Pengawasan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('Data-Pengawasan') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-12">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $pemanfaatan }}</h3>

                                <p>Pemanfaatan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('tabel') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        <!-- End Konten Score Chart -->

        <!-- Posisi Grafik Chart -->
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div id="piechart"></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div id="donutchart"></div>
                    </div>
                </div>
        <!-- End Posisi Grafik Chart -->
                        
        <!-- Tabel Data Pemanfaatan -->
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pemanfaatan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Perizinan</th>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Desa</th>
                                            <th>Luas</th>
                                            <th>Uraian</th>
                                            <th>Sertifikat</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tahun Akhir</th>
                                            <th>File SK Preview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtpemanfaatan as $item)
                                            <tr>
                                                <td>{{ $item->kode_perizinan }}</td>
                                                <td>{{ $item->kabupaten }}</td>
                                                <td>{{ $item->kapanewon }}</td>
                                                <td>{{ $item->kelurahan }}</td>
                                                <td>{{ $item->desa }}</td>
                                                <td>{{ $item->persil }}</td>
                                                <td>{{ $item->luas }}</td>
                                                <td>{{ $item->uraian }}</td>
                                                <td>{{ $item->tanggal_mulai }}</td>
                                                <td>{{ $item->tanggal_akhir }}</td>
                                                <td>
                                                    @if ($item->file_SK != null)
                                                        <a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File 1</a>
                                                        <br>
                                                    @elseif ($item->file_SK_2 != null)
                                                        <a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                                            2</a>
                                                        <br>
                                                    @elseif ($item->file_SK_3 != null)
                                                        <a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                                            3</a>
                                                        <br>
                                                    @elseif ($item->file_SK_4 != null)
                                                        <a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                                            4</a>
                                                    @elseif ($item->file_SK_4 != null)
                                                        <a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                                            5</a>
                                                    @else
                                                        <a href="{{ url('uploads/file_SK/' . $item->file_SK) }}">File 1</a>
                                                        <br>
                                                        <a href="{{ url('uploads/file_SK_2/' . $item->file_SK_2) }}">File
                                                            2</a>
                                                        <br>
                                                        <a href="{{ url('uploads/file_SK_3/' . $item->file_SK_3) }}">File
                                                            3</a>
                                                        <br>
                                                        <a href="{{ url('uploads/file_SK_4/' . $item->file_SK_4) }}">File
                                                            4</a>
                                                        <br>
                                                        <a href="{{ url('uploads/file_SK_5/' . $item->file_SK_5) }}">File
                                                            5</a>
                                                        <br>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
      <!-- End Tabel Data Pemanfaatan -->
      <!-- Tabel Data Pengawasan -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Pengawasan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kabupaten</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>Tahun Pengawasan</th>
                                            <th>Nomor SK</th>
                                            <th class="d-none">Tanggal SK</th>
                                            <th>Bentuk Pemanfaatan</th>
                                            <th class="d-none">Pengelola</th>
                                            <th>Persil Klas</th>
                                            <th class="d-none">Nomor Sertifikat</th>
                                            <th class="d-none">Luas Pemanfaatan</th>
                                            <th class="d-none">Luas Keseluruhan</th>
                                            <th class="d-none">Jumlah Bidang</th>
                                            <th class="d-none">Lokasi</th>
                                            <th class="d-none">Koordinat</th>
                                            <th class="d-none">Jangka Waktu</th>
                                            <th>Jenis Sk</th>
                                            <th>Tindak Lanjut</th>
                                            <th>Kesesuaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dtpengawasan as $item)
                                            <tr>
                                                <td>{{ $item->kabupaten }}</td>
                                                <td>{{ $item->kapanewon }}</td>
                                                <td>{{ $item->kelurahan }}</td>
                                                <td>{{ $item->tahun_pengawasan }}</td>
                                                <td>{{ $item->nomor_sk }}</td>
                                                <td class="d-none">{{ $item->tanggal_sk }}</td>
                                                <td>{{ $item->bentuk_pemanfaatan }}</td>
                                                <td class="d-none">{{ $item->pengelola }}</td>
                                                <td>{{ $item->persil_klas }}</td>
                                                <td class="d-none">{{ $item->nomor_sertifikat }}</td>
                                                <td class="d-none">{{ $item->luas_pemanfaatan }}</td>
                                                <td class="d-none">{{ $item->luas_keseluruhan }}</td>
                                                <td class="d-none">{{ $item->jumlah_bidang }}</td>
                                                <td class="d-none">{{ $item->lokasi }}</td>
                                                <td class="d-none">{{ $item->koordinat }}</td>
                                                <td class="d-none">{{ $item->jktwaktu }}</td>
                                                <td>{{ $item->jenis_sk }}</td>
                                                <td>{{ $item->tdklanjut }}</td>
                                                <td>{{ $item->kesesuaian }}</td>
                                                <td>
                                                    <a href="{{ url('view-pengawasan', $item->id) }}"><i
                                                            class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Tabel Data Pengawasan -->
@endsection


