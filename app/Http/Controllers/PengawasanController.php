<?php

namespace App\Http\Controllers;

use App\Models\pengawasan;
use App\Http\Requests\StorepengawasanRequest;
use App\Http\Requests\UpdatepengawasanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PengawasanController extends Controller
{

    // Filter Pengawasan
    public function tahun(Request $request)
    {
        $data = DB::table('pengawasan')->select('tahun_pengawasan')->distinct()->get();
        return response()->json($data);
    }
    public function kabupaten(Request $request)
    {
        $data = DB::table('pengawasan')->select('kabupaten')->distinct()->get();
        return $data;
    }
    public function kapanewon(Request $request)
    {
        $kabupaten = $request->query('kabupaten');
        if (!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pengawasan')->where('kabupaten', $kabupaten)->select('kapanewon')->distinct()->get();
        // dd($data);
        return $data;
    }

    public function kelurahan(Request $request)
    {
        $kabupaten = $request->query('kabupaten');
        if (!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pengawasan')->where('kabupaten', $kabupaten)->select('kelurahan')->distinct()->get();
        // dd($data);
        return $data;
    }
    public function pengawasan(Request $request)
    {
        // dd($request);
        $kabupaten =  $request->query('kabupaten');
        $kapanewon = $request->query('kapanewon');
        $kelurahan = $request->query('kelurahan');

        $tahun = $request->query('tahun');
        if (isset($tahun)) {
            if (isset($kapanewon) && isset($kabupaten) && isset($kelurahan)) {
                $data = DB::table('pengawasan')
                    ->where('kabupaten', $kabupaten)
                    ->where('kapanewon', $kapanewon)
                    ->where('kelurahan', $kelurahan)
                    ->where('tahun_pengawasan', $tahun)
                    ->get();
            } elseif (isset($kelurahan) && isset($kabupaten)) {
                $data = DB::table('pengawasan')
                    ->where('kabupaten', $kabupaten)
                    ->where('kelurahan', $kelurahan)
                    ->where('tahun_pengawasan', $tahun)
                    ->get();
            } elseif (isset($kabupaten)) {
                $data = DB::table('pengawasan')
                    ->where('kabupaten', $kabupaten)
                    ->where('tahun_pengawasan', $tahun)
                    ->get();
            } else {
                $data = DB::table('pengawasan')
                    ->where('tahun_pengawasan', $tahun)
                    ->get();
            };
            return response()->json($data);
        }
        if (isset($kapanewon) && isset($kabupaten) && isset($kelurahan)) {
            $data = DB::table('pengawasan')
                ->where('kabupaten', $kabupaten)
                ->where('kapanewon', $kapanewon)
                ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kelurahan) && isset($kabupaten)) {
            $data = DB::table('pengawasan')
                ->where('kabupaten', $kabupaten)
                ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kapanewon) && isset($kabupaten)) {
            $data = DB::table('pengawasan')
                ->where('kabupaten', $kabupaten)
                ->where('kapanewon', $kapanewon)->get();
        } else {
            $data = DB::table('pengawasan')
                ->where('kabupaten', $kabupaten)->get();
        };
        return response()->json($data);
    }
    // End Filter Pengawasan

    // Show All data pengawasan
    public function index()
    {
        $dtpengawasan = pengawasan::all();
        return view('Pengawasan.Data-Pengawasan', compact('dtpengawasan'));

        $dtpengawasan = pengawasan::with('pengawasan')->get();
        return response()->json($dtpengawasan);
    }
    // End Show All data pengawasan

    // Show Form Page create pengawasan
    public function create()
    {
        //
        return view('Pengawasan.Create-Pengawasan');
    }
    // End Show Form Page create pengawasan

     // Input data pengawasan to database
    public function store(Request $request)
    {

        $pengawasan = new pengawasan;
        $pengawasan->id = $request->input('id');
        $pengawasan->kabupaten = $request->input('kabupaten');
        $pengawasan->kapanewon = $request->input('kapanewon');
        $pengawasan->kelurahan = $request->input('kelurahan');
        $pengawasan->tahun_pengawasan = $request->input('tahun_pengawasan');
        $pengawasan->nomor_sk = $request->input('nomor_sk');
        $pengawasan->tanggal_sk = $request->input('tanggal_sk');
        $pengawasan->bentuk_pemanfaatan = $request->input('bentuk_pemanfaatan');
        $pengawasan->pengelola = $request->input('pengelola');
        $pengawasan->persil_klas = $request->input('persil_klas');
        $pengawasan->nomor_sertifikat = $request->input('nomor_sertifikat');
        $pengawasan->luas_pemanfaatan = $request->input('luas_pemanfaatan');
        $pengawasan->luas_keseluruhan = $request->input('luas_keseluruhan');
        $pengawasan->jumlah_bidang = $request->input('jumlah_bidang');
        $pengawasan->lokasi = $request->input('lokasi');
        $pengawasan->koordinat = $request->input('koordinat');
        $pengawasan->jktwaktu = $request->input('jktwaktu');
        $pengawasan->jenis_sk = $request->input('jenis_sk');
        $pengawasan->tdklanjut = $request->input('tdklanjut');
        $pengawasan->kesesuaian = $request->input('kesesuaian');

        $pengawasan->save();
        return redirect()->route('Data-Pengawasan')->with('flash_message_success', 'Data Pengawasan Berhasil Ditambahkan!');
    }
   // End Input data pengawasan to database

   // Show One data pengawasan
    public function show($id)
    {
        return response()->json(Pengawasan::with('pengawasan')->find($id));
    }
    // End Show One data pengawasan

    // Show full tabel data pengawasan
    public function view($id)
    {
        //
        $Pengawasan = Pengawasan::select('*')
            ->where('id', $id)
            ->get();
        return view('Pengawasan.View-Pengawasan', ['Pengawasan' => $Pengawasan]);
    }
    // End Show full tabel data pengawasan

   // Show form edit data pengawasan
    public function edit($id)
    {
        //
        $Pengawasan = Pengawasan::select('*')
            ->where('id', $id)
            ->get();
        return view('Pengawasan.Edit-Pengawasan', ['Pengawasan' => $Pengawasan]);
    }
    // Show form edit data pengawasan

    // Edit data pengawasan
    public function update(Request $request, $id)
    {

        $pengawasan = pengawasan::find($id);
        $pengawasan->kabupaten = $request->input('kabupaten');
        $pengawasan->kapanewon = $request->input('kapanewon');
        $pengawasan->kelurahan = $request->input('kelurahan');
        $pengawasan->tahun_pengawasan = $request->input('tahun_pengawasan');
        $pengawasan->nomor_sk = $request->input('nomor_sk');
        $pengawasan->tanggal_sk = $request->input('tanggal_sk');
        $pengawasan->bentuk_pemanfaatan = $request->input('bentuk_pemanfaatan');
        $pengawasan->pengelola = $request->input('pengelola');
        $pengawasan->persil_klas = $request->input('persil_klas');
        $pengawasan->nomor_sertifikat = $request->input('nomor_sertifikat');
        $pengawasan->luas_pemanfaatan = $request->input('luas_pemanfaatan');
        $pengawasan->luas_keseluruhan = $request->input('luas_keseluruhan');
        $pengawasan->jumlah_bidang = $request->input('jumlah_bidang');
        $pengawasan->lokasi = $request->input('lokasi');
        $pengawasan->koordinat = $request->input('koordinat');
        $pengawasan->jktwaktu = $request->input('jktwaktu');
        $pengawasan->jenis_sk = $request->input('jenis_sk');
        $pengawasan->tdklanjut = $request->input('tdklanjut');
        $pengawasan->kesesuaian = $request->input('kesesuaian');
        // dd($dpemanfaatan);

        $pengawasan->update();
        return redirect()->route('Data-Pengawasan')->with('flash_message_warning', 'Data Pengawasan Berhasil Diubah!');
    }
    // End Edit data pengawasan

   // Delete data pengawasan
    public function destroy($id = null)
    {
        $pengawasan = pengawasan::find($id);
        pengawasan::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_danger', 'Data Pengawasan Berhasil Dihapus!');
    }
    // End Delete data pemanfaatan
}
