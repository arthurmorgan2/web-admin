<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    public function showDataKategori()
    {
        $kategori = Kategori::all();

        return view('admin/kategori/data-kategori', compact('kategori'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        // dd($data);

        Kategori::where(['id' => $id])->update(['nama_kategori' => $data['nama_kategori'], 'slug' => $data['slug']]);

        return redirect()->back()->with('warning', 'Data Berhasil Diubah!');
    }

    public function delete($id = null)
    {
        Kategori::where(['id' => $id])->delete();
        return redirect()->back()->with('danger', 'Data Berhasil Dihapus!');
    }
}
