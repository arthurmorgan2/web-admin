<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use App\Models\FileUpload;
use Illuminate\Support\Facades\DB;

class UserdasboardController extends Controller
{
    
    // Show All and Tabel data
    public function index()
    {
        $dtpemanfaatan = dpemanfaatan::with('files')->get();

        $dtpengawasan = DB::table('pengawasan')->get();

        $administrasi = DB::table('administrasi')->get();
        
       return view('user_dashboard', compact('dtpengawasan','dtpemanfaatan', 'administrasi')); 
    }

    public function tabeldata()
    {
        $dtpemanfaatan = DB::table('pemanfaatan')
        ->join('file', 'file.id_pemanfaatan', '=', 'pemanfaatan.id')
        
        ->get();

        return view('user_dashboard', compact('dtpemanfaatan'));

        $dtpengawasan = DB::table('pengawasan');

        return view('user_dashboard', compact('dtpengawasan'));
        
    }

    // End Show All and Tabel data

    public function store(Request $request)
    {
        $files = [];
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('files'), $name);  
                $files[] = $name;  
            }
        }

        $hello = dpemanfaatan::create([
    
            'kode_perizinan'=> $request->kode_perizinan,
            'desa_kecamatan'=>$request->desa_kecamatan,
            'kabupaten'=>$request->kabupaten,
            'kelurahan'=>$request->kelurahan,
            'persil'=>$request->persil,
            'luas'=>$request->luas,
            'uraian'=>$request->uraian,
            'tanggal_mulai'=>$request->tanggal_mulai,
            'tanggal_akhir'=>$request->tanggal_akhir,
            'file_SK' => 'hehe :P'
        ]);

        $hello = pengawasan::create([
            'id'=>$request->id,
            'kabupaten'=>$request->kabupaten,
            'kapanewon'=>$request->kapanewon,
            'kelurahan'=>$request->kelurahan,
            'tahun_pengawasan'=>$request->tahun_pengawasan,
            'nomor_sk'=>$request->nomor_sk,
            'tanggal_sk'=>$request->tanggal_sk,
            'bentuk_pemanfaatan'=>$request->bentuk_pemanfaatan,
            'pengelola'=>$request->pengelola,
        ]);
        

        foreach($files as $file) {
            FileUpload::create([
                'filename' => $file,
                'id_pemanfaatan' => $hello->id
            ]);
        }

        return redirect('user_dashboard');
    }

    public function show($id)
    {
        return response()->json(pengawasan::with('pengawasan')->find($id));
    }


}
