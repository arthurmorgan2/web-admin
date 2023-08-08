<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DashboardResource;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $pengunjung = Pengunjung::all();

        return new DashboardResource(true, 'Data Pengunjung', $pengunjung);
    }
}
