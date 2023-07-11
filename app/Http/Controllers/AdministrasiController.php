<?php

namespace App\Http\Controllers;

use App\Models\administrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdministrasiController extends Controller
{

     // Show All data permohonan izin
    public function index()
    {
        $administrasi = administrasi::all();
        return view('permohonan_izin.tabel_izin', compact('administrasi'));

        $administrasi = administrasi::with('administrasi')->get();
        return response()->json($administrasi);
    }
    // End Show All data permohonan izin

     // Show Form Page create permohonan izin
    public function create()
    {
        return view('permohonan_izin.form_izin');
    }
    // End Show Form Page create permohonan izin

     // Input data permohonan izin to database
    public function store(Request $request)
    {

        $administrasi = new administrasi;
        $administrasi->id = $request->input('id');
        $administrasi->desa = $request->input('desa');
        $administrasi->tgl_masuk = $request->input('tgl_masuk');
        $administrasi->tindak = $request->input('tindak');
        $administrasi->pengembalian = $request->input('pengembalian');
        $administrasi->proses_kasultanan = $request->input('proses_kasultanan');
        $administrasi->jawaban_kasultanan = $request->input('jawaban_kasultanan');
        $administrasi->proses_biro = $request->input('proses_biro');
        $administrasi->jawaban_biro = $request->input('jawaban_biro');

        if ($request->hasfile('file_SK')) {
            $file = $request->file('file_SK');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/file_SK/', $filename);
            $administrasi->file_SK = $filename;
        }
        if ($request->hasfile('file_SK_2')) {
            $file = $request->file('file_SK_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '2.' . $extension;
            $file->move('uploads/file_SK_2/', $filename);
            $administrasi->file_SK_2 = $filename;
        }
        if ($request->hasfile('file_SK_3')) {
            $file = $request->file('file_SK_3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '3.' . $extension;
            $file->move('uploads/file_SK_3/', $filename);
            $administrasi->file_SK_3 = $filename;
        }
        if ($request->hasfile('file_SK_4')) {
            $file = $request->file('file_SK_4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '4.' . $extension;
            $file->move('uploads/file_SK_4/', $filename);
            $administrasi->file_SK_4 = $filename;
        }
        if ($request->hasfile('file_SK_5')) {
            $file = $request->file('file_SK_5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '5.' . $extension;
            $file->move('uploads/file_SK_5/', $filename);
            $administrasi->file_SK_5 = $filename;
        }

        $administrasi->save();
        return redirect()->route('tabel_izin')->with('flash_message_success', 'Data Permohonan Izin Berhasil Ditambahkan!');
    }
     // End Input data permohonan izin to database

    // Show One data permohonan izin
    public function show($id)
    {
        return response()->json(administrasi::with('administrasi')->find($id));
    }
    // End Show One data permohonan izin

     // Show Form Edit data permohonan izin
    public function edit($id)
    {
        $admistrasi = administrasi::select('*')
            ->where('id', $id)
            ->get();
        return view('permohonan_izin.Edit_izin', ['administrasi' => $admistrasi]);
    }
    // End Show Form Edit data permohonan izin

    // Edit data permohonan izin
    public function update(Request $request, $id)
    {

        $administrasi = administrasi::find($id);
        $administrasi->desa = $request->input('desa');
        $administrasi->tgl_masuk = $request->input('tgl_masuk');
        $administrasi->tindak = $request->input('tindak');
        $administrasi->pengembalian = $request->input('pengembalian');
        $administrasi->proses_kasultanan = $request->input('proses_kasultanan');
        $administrasi->jawaban_kasultanan = $request->input('jawaban_kasultanan');
        $administrasi->proses_biro = $request->input('proses_biro');
        $administrasi->jawaban_biro = $request->input('jawaban_biro');

        if ($request->hasfile('file_SK')) {
            $file_path = 'uploads/file_SK/' . $administrasi->file_SK;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_SK');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/file_SK/', $filename);
            $administrasi->file_SK = $filename;
        }
        if ($request->hasfile('file_SK_2')) {
            $file_path = 'uploads/file_SK_2/' . $administrasi->file_SK_2;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_SK_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '2.' . $extension;
            $file->move('uploads/file_SK_2/', $filename);
            $administrasi->file_SK_2 = $filename;
        }
        if ($request->hasfile('file_SK_3')) {
            $file_path = 'uploads/file_SK_3/' . $administrasi->file_SK_3;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_SK_3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '3.' . $extension;
            $file->move('uploads/file_SK_3/', $filename);
            $administrasi->file_SK_3 = $filename;
        }
        if ($request->hasfile('file_SK_4')) {
            $file_path = 'uploads/file_SK_4/' . $administrasi->file_SK_4;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_SK_4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '4.' . $extension;
            $file->move('uploads/file_SK_4/', $filename);
            $administrasi->file_SK_4 = $filename;
        }
        if ($request->hasfile('file_SK_5')) {
            $file_path = 'uploads/file_SK_5/' . $administrasi->file_SK_5;
            if (File::exists($file_path)) {
                File::delete($file_path);
            }
            $file = $request->file('file_SK_5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '5.' . $extension;
            $file->move('uploads/file_SK_5/', $filename);
            $administrasi->file_SK_5 = $filename;
        }

        $administrasi->update();
        return redirect()->route('tabel_izin')->with('flash_message_warning', 'Data Permohonan Izin Berhasil Diubah!');
    }
    // End Edit data permohonan izin

    // Delete data permohonan izin
    public function delete($id = null)
    {
        $administrasi = administrasi::find($id);
        $file = $administrasi->file_SK;
        $file_2 = $administrasi->file_SK_2;
        $file_3 = $administrasi->file_SK_3;
        $file_4 = $administrasi->file_SK_4;
        $file_5 = $administrasi->file_SK_5;
        Storage::delete($file, $file_2, $file_3, $file_4, $file_5);
        administrasi::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_danger', 'Data Permohonan Izin Berhasil Dihapus!');
    }
    // End Delete data permohonan izin
}
