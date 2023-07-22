<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class FrontController extends Controller
{
    public function index()
    {
        return view('client/index');
    }
    public function showPengunjung()
    {
        return view('client/pengunjung');
    }
    public function showBerita()
    {
        return view('client/berita');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|max:100',
            'umur' => 'required',
            'pekerjaan' => 'required',
            'konsultasi_bidang' => 'required',
            'alamat' => 'required|max:200',
            'konsultasi' => 'required|max:200',
        ]);

        $data = [];

        $data = $request->all();

        Pengunjung::create($data);

        // dd($data);
        return redirect('/daftar-pengunjung')->with('success', 'Data Berhasil Disimpan!');
    }
}