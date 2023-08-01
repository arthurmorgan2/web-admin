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
        $artikel = Artikel::latest()->paginate(10);
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();
        $kategori = Kategori::all();
        return view('client/berita', compact('artikel', 'post_populer', 'kategori'));
    }


    public function detail_artikel(Request $request, $slug, Artikel $post)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();
        $viewed = Session::get('judul', []);
        if (!in_array($artikel->id, $viewed)) {
            $artikel->increment('views');
            Session::push('judul', $artikel->id);
        }

        return view('/client/detail-berita', compact('artikel', 'viewed', 'post_populer'));
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

    public function search(Request $request)
    {
        $post_populer = Artikel::orderBy('views', 'desc')->limit('4')->get();

        if ($request->search) {
            $all = Artikel::where('judul', 'like', '%' . $request->search . '%')
                ->latest()->paginate(10);
        } else {
            $all = Artikel::latest()
                ->paginate(10);
        }
        return view('/client/search', compact('all', 'post_populer'));
    }
}
