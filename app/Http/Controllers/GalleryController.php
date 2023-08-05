<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function showDataGallery()
    {
        $gallery = Gallery::all();

        return view('admin/gallery/data-gallery', compact('gallery'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'deskripsi' => 'required|max:100',
            'kategori_gallery' => 'required|max:100',
            'gambar_gallery' => 'nullable|image|mimes:jpeg,bmp,png,jpg,svg',

        ]);
        $data = [];

        if ($request->has('gambar_gallery')) {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();
            $data['gambar_gallery'] = $request->file('gambar_gallery')->store('gallery');

            Gallery::create($data);
        } else {
            $data = $request->all();
            $data['deskripsi'] = strip_tags($request->deskripsi);
            $data['user_id'] = Auth::id();

            Gallery::create($data);
        }

        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request, $id)
    {

        $gallery = Gallery::find($id);
        if (empty($request->file('gambar_gallery'))) {

            $gallery = Gallery::find($id);
            $gallery->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_gallery' => $request->kategori_gallery,
            ]);
        } else if ($gallery->gambar_gallery == null) {
            $gallery = Gallery::find($id);
            $gallery->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_gallery' => $request->kategori_gallery,
                'gambar_gallery' => $request->file('gambar_gallery')->store('gallery')
            ]);
        } else {
            $gallery = Gallery::find($id);
            Storage::delete($gallery->gambar_gallery);
            $gallery->update([
                'deskripsi' => strip_tags($request->deskripsi),
                'kategori_gallery' => $request->kategori_id,
                'gambar_gallery' => $request->file('gambar_gallery')->store('gallery')
            ]);
        }
        return redirect()->back()->with('warning', 'Data Berhasil Diubah!');
    }

    public function delete($id = null)
    {
        $gallery = Gallery::find($id);

        if ($gallery->gambar_gallery) {
            Storage::delete($gallery->gambar_gallery);
            Gallery::where(['id' => $id])->delete();
        } else {
            Gallery::where(['id' => $id])->delete();
        }

        return redirect()->back()->with('danger', 'Data Berhasil Dihapus!');
    }
}
