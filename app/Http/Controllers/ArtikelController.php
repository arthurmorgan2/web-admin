<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{

    public function showDataArtikel()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('admin/artikel/data-artikel', compact('artikel', 'kategori'));
    }
    public function showArtikelCreate()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();
        return view('admin/artikel/data-artikel-create', compact('artikel', 'kategori'));
    }

    public function showArtikelEdit($id)
    {
        // $artikel = Artikel::all();
        $kategori = Kategori::all();
        $artikel = Artikel::select('*')
            ->where('id', $id)
            ->get();
        return view('admin/artikel/data-artikel-update', compact('artikel', 'kategori'));
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required|max:100',
            'body' => 'required|max:3000',
            'sumber' => 'required',
            'gambar_artikel' => 'nullable|image|mimes:jpeg,bmp,png,jpg,svg',
        ]);

        $data = [];

        if ($request->has('gambar_artikel')) {
            $data = $request->all();
            $data['slug'] = Str::slug($request->judul);
            $data['body'] = strip_tags($request->body);
            $data['user_id'] = Auth::id();
            $data['views'] = 0;
            $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

            Artikel::create($data);
        } else {
            $data = $request->all();
            $data['slug'] = Str::slug($request->judul);
            $data['body'] = strip_tags($request->body);
            $data['user_id'] = Auth::id();
            $data['views'] = 0;

            Artikel::create($data);
        }

        return redirect('/data-artikel')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit(Request $request, $id)
    {
        $artikel = Artikel::find($id);
        if (empty($request->file('gambar_artikel'))) {

            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
            ]);
        } else if ($artikel->gambar_artikel == null) {
            $artikel = Artikel::find($id);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel')
            ]);
        } else {
            $artikel = Artikel::find($id);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => strip_tags($request->body),
                'slug' => Str::slug($request->judul),
                'kategori_id' => $request->kategori_id,
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel')
            ]);
        }
        return redirect('/data-artikel')->with('warning', 'Data Berhasil Diubah!');
    }

    public function delete($id = null)
    {
        $artikel = Artikel::find($id);

        if ($artikel->gambar_artikel) {
            Storage::delete($artikel->gambar_artikel);
            Artikel::where(['id' => $id])->delete();
        } else {
            Artikel::where(['id' => $id])->delete();
        }

        return redirect()->back()->with('danger', 'Data Berhasil Dihapus!');
    }
}
