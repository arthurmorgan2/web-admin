<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DashboardResource;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $month = Pengunjung::select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(created_at) as month")
        )
        ->whereYear('created_at', date('Y'))
        ->groupBy('month')->get()->toArray();

        // dd($month);
        return new DashboardResource(true, 'Data Pengunjung', $month);
    }
}
