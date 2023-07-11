<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\dpemanfaatan;
use App\Models\pengawasan;
use App\Models\administrasi;

use App\Models\User;

class LoginController extends Controller
{

    // Check Auth Login
    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }
    // End Check Auth Login

    // Input Action Login Admin
    public function actionlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect('/home');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/login');
        }
    }
    // End Input Action Login Admin

    // Logout Admin
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
    // End Logout Admin


    public function masterlogin()
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
        if (Auth::check()) {
            return view('login_master');
        } else {
            return view('home', [
                'pengawasan' => $jml_pengawasan, 'pemanfaatan' => $jml_pemanfaatan, 'chartData' => $chartData, 'administrasi' => $jml_administrasi,
                'charData' => $charData
            ], compact('dtpengawasan', 'dtpemanfaatan', 'administrasi'));
        }
    }


    }
