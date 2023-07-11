@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <tbody>
                                @foreach ($Pengawasan as $item)
                                    <tr>
                                        <th>Kabupaten</th>
                                        <td>{{ $item->kabupaten }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kapanewon</th>
                                        <td>{{ $item->kapanewon }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kalurahan</th>
                                        <td>{{ $item->kelurahan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tahun Pengawasan</th>
                                        <td>{{ $item->tahun_pengawasan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor SK</th>
                                        <td>{{ $item->nomor_sk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal SK</th>
                                        <td>{{ $item->tanggal_sk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bentuk Pemanfaatan</th>
                                        <td>{{ $item->bentuk_pemanfaatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pengelola</th>
                                        <td>{{ $item->pengelola }}</td>
                                    </tr>
                                    <tr>
                                        <th>Persil Klas</th>
                                        <td>{{ $item->persil_klas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Sertifikat</th>
                                        <td>{{ $item->nomor_sertifikat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Pemanfaatan</th>
                                        <td>{{ $item->luas_pemanfaatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Luas Keseluruhan</th>
                                        <td>{{ $item->luas_keseluruhan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Bidang</th>
                                        <td>{{ $item->jumlah_bidang }}</td>
                                    </tr>
                                    <tr>
                                        <th>Lokasi</th>
                                        <td>{{ $item->lokasi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Koordinat</th>
                                        <td>{{ $item->koordinat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jangka Waktu</th>
                                        <td>{{ $item->jktwaktu }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis SK</th>
                                        <td>{{ $item->jenis_sk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tindak Lanjut</th>
                                        <td>{{ $item->tdklanjut }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kesesuaian</th>
                                        <td>{{ $item->kesesuaian }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.select2')
@endsection
