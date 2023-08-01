<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\Artikel;
use Illuminate\Support\Carbon;


class AdminController extends Controller
{
    public function index(Request $request)
    {
        $pengunjung = Pengunjung::whereDate('created_at', Carbon::today())->count();
        // $pengunjung = Pengunjung::count();
        $artikel = Artikel::count();
        $views = Artikel::sum('views');
        // dd($pengunjung, $artikel, $views);
        return view('admin/dashboard', compact('pengunjung', 'artikel', 'views'));
    }
}
