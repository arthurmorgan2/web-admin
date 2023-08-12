<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Validation\Validator;

class VideoController extends Controller
{
    public function showDataVideo()
    {
        $video = Video::all();

        return view('admin/gallery/data-video', compact('video'));
    }

    public function create(Request $request)
    {
        $validate = $this->validate($request, [
            'judul' => 'required|max:100',
            'deskripsi' => 'required|max:100',
            'link' => 'required|active_url',
        ]);

        $data = [];

        $data = $request->all();
        $data['deskripsi'] = strip_tags($request->deskripsi);
        $data['user_id'] = Auth::id();

        Video::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan!');
    }

    public function update(Request $request, $id)
    {

        $video = Video::find($id);

        $video->update([
            'judul' => $request->judul,
            'deskripsi' => strip_tags($request->deskripsi),
            'link' => $request->link,
        ]);

        return redirect()->back()->with('warning', 'Data Berhasil Diubah!');
    }

    public function delete($id = null)
    {
        $video = Video::find($id);

        Video::where(['id' => $id])->delete();

        return redirect()->back()->with('danger', 'Data Berhasil Dihapus!');
    }
}
