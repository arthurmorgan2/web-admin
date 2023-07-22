<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\PasienBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
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
        $artikel = Artikel::latest()->paginate(2);
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();
        $kategori = Kategori::all();
        return view('client/berita', compact('artikel', 'post_populer', 'kategori'));
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
