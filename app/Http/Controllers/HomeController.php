<?php

namespace App\Http\Controllers;

use App\Models\Administrasi;
use Illuminate\Http\Request;
use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use App\Models\FileUpload;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // Show All Data and Chart
    public function index()
    {

        $chartData = DB::table('pemanfaatan')
            ->selectRaw(('count(*) as total_kabupaten, kabupaten'))
            ->groupBy('kabupaten')
            ->get();

        $charData = DB::table('Pengawasan')
            ->selectRaw(('count(*) as total_kabupaten, kabupaten'))
            ->groupBy('kabupaten')
            ->get();

        $dtpemanfaatan = dpemanfaatan::with('files')->get();
        $dtpengawasan = DB::table('pengawasan')->get();
        $administrasi = DB::table('administrasi')->get();
        $jml_pemanfaatan = dpemanfaatan::count();
        $jml_pengawasan = pengawasan::count();
        $jml_administrasi = Administrasi::count();
        return view('home', [
            'pengawasan' => $jml_pengawasan, 'pemanfaatan' => $jml_pemanfaatan, 'chartData' => $chartData, 'administrasi' => $jml_administrasi,
            'charData' => $charData
        ], compact('dtpengawasan', 'dtpemanfaatan', 'administrasi'));
    }
    // End Show All Data and Chart
   
    public function store(Request $request)
    {
        $files = [];
        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('files'), $name);
                $files[] = $name;
            }
        }
        // dd($request->all());
        $hello = dpemanfaatan::create([

            'kode_perizinan' => $request->kode_perizinan,
            'desa_kecamatan' => $request->desa_kecamatan,
            'kabupaten' => $request->kabupaten,
            'kelurahan' => $request->kelurahan,
            'persil' => $request->persil,
            'luas' => $request->luas,
            'uraian' => $request->uraian,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'file_SK' => 'hehe :P'
        ]);

        $hello = pengawasan::create([
            'id' => $request->id,
            'kabupaten' => $request->kabupaten,
            'kapanewon' => $request->kapanewon,
            'kelurahan' => $request->kelurahan,
            'tahun_pengawasan' => $request->tahun_pengawasan,
            'nomor_sk' => $request->nomor_sk,
            'tanggal_sk' => $request->tanggal_sk,
            'bentuk_pemanfaatan' => $request->bentuk_pemanfaatan,
            'pengelola' => $request->pengelola,
        ]);

        foreach ($files as $file) {
            FileUpload::create([
                'filename' => $file,
                'id_pemanfaatan' => $hello->id
            ]);
        }

        return redirect('home');
    }

    // Show One Data 
    public function show($id)
    {
        return response()->json(pengawasan::with('pengawasan')->find($id));
    }


}
