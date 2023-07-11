<?php

namespace App\Http\Controllers;

use App\Models\dpemanfaatan;
use App\Models\FileUpload;
use App\Http\Requests\StoredpemanfaatanRequest;
use App\Http\Requests\UpdatedpemanfaatanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class DpemanfaatanController extends Controller
{

    // Filter Pemanfaatan 
    public function tahunA(Request $request)
    {
        $data = DB::table('pemanfaatan')->select('tanggal_akhir')->distinct()->get();
        return response()->json($data);
    }
    public function kabupaten(Request $request)
    {
        $data = DB::table('pemanfaatan')->select('kabupaten')->distinct()->get();
        return $data;
    }
    public function kapanewon(Request $request)
    {
        $kabupaten = $request->query('kabupaten');
        if (!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pemanfaatan')->where('kabupaten', $kabupaten)->select('kapanewon')->distinct()->get();
        // dd($data);
        return $data;
    }
    public function kelurahan(Request $request)
    {
        $kabupaten = $request->query('kabupaten');
        if (!isset($kabupaten)) {
            dd("gk ada kabupaten di query");
        }
        $data = DB::table('pemanfaatan')->where('kabupaten', $kabupaten)->select('kelurahan')->distinct()->get();
        // dd($data);
        return $data;
    }

    public function pemanfaatan(Request $request)
    {
        // dd($request);
        $kabupaten =  $request->query('kabupaten');
        $kapanewon = $request->query('kapanewon');
        $kelurahan = $request->query('kelurahan');

        $tahun = $request->query('tahun');
        if (isset($tahun)) {
            if (isset($kapanewon) && isset($kabupaten) && isset($kelurahan)) {
                $data = DB::table('pemanfaatan')
                    ->where('kabupaten', $kabupaten)
                    ->where('kapanewon', $kapanewon)
                    ->where('kelurahan', $kelurahan)
                    ->where('tanggal_akhir', $tahun)
                    ->get();
            } elseif (isset($kelurahan) && isset($kabupaten)) {
                $data = DB::table('pemanfaatan')
                    ->where('kabupaten', $kabupaten)
                    ->where('kelurahan', $kelurahan)
                    ->where('tanggal_akhir', $tahun)
                    ->get();
            } elseif (isset($kabupaten) && isset($kapanewon)) {
                $data = DB::table('pemanfaatan')
                    ->where('kabupaten', $kabupaten)
                    ->where('kapanewon', $kapanewon)
                    ->where('tanggal_akhir', $tahun)
                    ->get();
            } elseif (isset($kabupaten)) {
                $data = DB::table('pemanfaatan')
                    ->where('kabupaten', $kabupaten)
                    ->where('tanggal_akhir', $tahun)
                    ->get();
            } else {
                $data = DB::table('pemanfaatan')
                    ->where('tanggal_akhir', $tahun)
                    ->get();
            };

            return response()->json($data);
        }
        if (isset($kapanewon) && isset($kabupaten) && isset($kelurahan)) {
            $data = DB::table('pemanfaatan')
                ->where('kabupaten', $kabupaten)
                ->where('kapanewon', $kapanewon)
                ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kelurahan) && isset($kabupaten)) {
            $data = DB::table('pemanfaatan')
                ->where('kabupaten', $kabupaten)
                ->where('kelurahan', $kelurahan)->get();
        } elseif (isset($kapanewon) && isset($kabupaten)) {
            $data = DB::table('pemanfaatan')
                ->where('kabupaten', $kabupaten)
                ->where('kapanewon', $kapanewon)->get();
        } else {
            $data = DB::table('pemanfaatan')
                ->where('kabupaten', $kabupaten)->get();
        };
        return response()->json($data);
    }

    // End Filter Pemanfaatan 

    // Show All data pemanfaatan
    public function index()
    {
        $dtpemanfaatan = dpemanfaatan::with('files')->get();
        return view('pemanfaatan.tabel', compact('dtpemanfaatan'));
    }
    // End Show All data permanfaatan

    // Show Form Page create pemanfaatan
    public function create()
    {
        return view('pemanfaatan.form-dpemanfaatan');
    }
    // End Show Form Page create pemanfaatan

    // Input data pemanfaatan to database
    public function store(Request $request)
    {

        $dpemanfaatan = new dpemanfaatan;
        $dpemanfaatan->kode_perizinan = $request->input('kode_perizinan');
        $dpemanfaatan->kabupaten = $request->input('kabupaten');
        $dpemanfaatan->kapanewon = $request->input('kapanewon');
        $dpemanfaatan->kelurahan = $request->input('kelurahan');
        $dpemanfaatan->desa = $request->input('desa');
        $dpemanfaatan->persil = $request->input('persil');
        $dpemanfaatan->luas = $request->input('luas');
        $dpemanfaatan->uraian = $request->input('uraian');
        $dpemanfaatan->tanggal_mulai = $request->input('tanggal_mulai');
        $dpemanfaatan->tanggal_akhir = $request->input('tanggal_akhir');


        if ($request->hasfile('file_SK')) {
            $file = $request->file('file_SK');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/file_SK/', $filename);
            $dpemanfaatan->file_SK = $filename;
        }
        if ($request->hasfile('file_SK_2')) {
            $file = $request->file('file_SK_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '2.' . $extension;
            $file->move('uploads/file_SK_2/', $filename);
            $dpemanfaatan->file_SK_2 = $filename;
        }
        if ($request->hasfile('file_SK_3')) {
            $file = $request->file('file_SK_3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '3.' . $extension;
            $file->move('uploads/file_SK_3/', $filename);
            $dpemanfaatan->file_SK_3 = $filename;
        }
        if ($request->hasfile('file_SK_4')) {
            $file = $request->file('file_SK_4');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '4.' . $extension;
            $file->move('uploads/file_SK_4/', $filename);
            $dpemanfaatan->file_SK_4 = $filename;
        }
        if ($request->hasfile('file_SK_5')) {
            $file = $request->file('file_SK_5');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '5.' . $extension;
            $file->move('uploads/file_SK_5/', $filename);
            $dpemanfaatan->file_SK_5 = $filename;
        }

        $dpemanfaatan->save();
        return redirect()->route('tabel')->with('flash_message_success', 'Data Pemanfaatan Berhasil Ditambahkan!');
    }
    // End Input data pemanfaatan to database

    // Show form edit data pemanfaatan
    public function edit($id)
    {
        $dpemanfaatan = dpemanfaatan::where('id', $id)->get();
        return view('pemanfaatan.edit-pemanfaatan', compact('dpemanfaatan'));
    }
    // End form edit data pemanfaatan

    // Edit data pemanfaatan
    public function update(Request $request, $id)
    {
        $dpemanfaatan = dpemanfaatan::find($id);

        if ($dpemanfaatan) {
            $dpemanfaatan->kode_perizinan = $request->input('kode_perizinan');
            $dpemanfaatan->kabupaten = $request->input('kabupaten');
            $dpemanfaatan->kapanewon = $request->input('kapanewon');
            $dpemanfaatan->kelurahan = $request->input('kelurahan');
            $dpemanfaatan->desa = $request->input('desa');
            $dpemanfaatan->persil = $request->input('persil');
            $dpemanfaatan->luas = $request->input('luas');
            $dpemanfaatan->uraian = $request->input('uraian');
            $dpemanfaatan->tanggal_mulai = $request->input('tanggal_mulai');
            $dpemanfaatan->tanggal_akhir = $request->input('tanggal_akhir');
            if ($request->hasfile('file_SK')) {
                $file_path = 'uploads/file_SK/' . $dpemanfaatan->file_SK;
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $file = $request->file('file_SK');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/file_SK/', $filename);
                $dpemanfaatan->file_SK = $filename;
            }
            if ($request->hasfile('file_SK_2')) {
                $file_path = 'uploads/file_SK_2/' . $dpemanfaatan->file_SK_2;
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $file = $request->file('file_SK_2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '2.' . $extension;
                $file->move('uploads/file_SK_2/', $filename);
                $dpemanfaatan->file_SK_2 = $filename;
            }
            if ($request->hasfile('file_SK_3')) {
                $file_path = 'uploads/file_SK_3/' . $dpemanfaatan->file_SK_3;
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $file = $request->file('file_SK_3');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '3.' . $extension;
                $file->move('uploads/file_SK_3/', $filename);
                $dpemanfaatan->file_SK_3 = $filename;
            }
            if ($request->hasfile('file_SK_4')) {
                $file_path = 'uploads/file_SK_4/' . $dpemanfaatan->file_SK_4;
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $file = $request->file('file_SK_4');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '4.' . $extension;
                $file->move('uploads/file_SK_4/', $filename);
                $dpemanfaatan->file_SK_4 = $filename;
            }
            if ($request->hasfile('file_SK_5')) {
                $file_path = 'uploads/file_SK_5/' . $dpemanfaatan->file_SK_5;
                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
                $file = $request->file('file_SK_5');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '5.' . $extension;
                $file->move('uploads/file_SK_5/', $filename);
                $dpemanfaatan->file_SK_5 = $filename;
            }
            $dpemanfaatan->update();
            return redirect()->route('tabel')->with('flash_message_warning', 'Data Pemanfaatan Berhasil Diubah!');
        } else {
            return redirect()->back()->with('flash_message_danger', 'Data Pemanfaatan Gagal Diubah!');
        }
    }
    // End Edit data pemanfaatan

   // Delete data pemanfaatan
    public function delete($id = null)
    {
        $dpemanfaatan = dpemanfaatan::find($id);
        Storage::delete($dpemanfaatan->file_SK);
        Storage::delete($dpemanfaatan->file_SK_2);
        Storage::delete($dpemanfaatan->file_SK_3);
        Storage::delete($dpemanfaatan->file_SK_4);
        Storage::delete($dpemanfaatan->file_SK_5);
        dpemanfaatan::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_danger', 'Data Pemanfaatan Berhasil Dihapus!');
    }
    // End Delete data pemanfaatan
}
