<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use Illuminate\Support\Str;

class PengunjungController extends Controller
{
    public function showDataPengunjung()
    {
        $pengunjung = Pengunjung::all();

        return view('admin/pengunjung/data-pengunjung', compact('pengunjung'));
    }
    public function showPengunjungCreate()
    {
        return view('admin/pengunjung/data-pengunjung-create');
    }
    public function showPengunjungEdit($id)
    {
        $pengunjung = Pengunjung::select('*')
            ->where('id', $id)
            ->get();
        return view('admin/pengunjung/data-pengunjung-edit', compact('pengunjung'));
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
        return redirect('/data-pengunjung')->with('success', 'Data Berhasil Disimpan!');
    }

    public function update($id, Request $request)
    {
        $pengunjung = Pengunjung::find($id);
        $pengunjung->update([
            'nama_lengkap' => $request->nama_lengkap,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'konsultasi_bidang' => $request->konsultasi_bidang,
            'alamat' => $request->alamat,
            'konsultasi' => $request->konsultasi,
        ]);

        return redirect('/data-pengunjung')->with('warning', 'Data Berhasil Diubah!');
    }

    public function delete($id = null)
    {
        // $pengunjung = Pengunjung::find($id);
        Pengunjung::where(['id' => $id])->delete();

        return redirect('/data-pengunjung')->with('danger', 'Data Berhasil Dihapus!');
    }
}
