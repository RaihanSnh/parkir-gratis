<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    //Login
    public function login(){
        return view('login.login');
    }

    public function postlogin(Request $request){
        if (Auth::attempt($request->only('username','password'))){
            return redirect('dashboard');
        }
        return redirect('login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('login');
    }

    //Dashboard
    public function dashboard(){
        $siswa = Siswa::all();
        $kendaraan = Kendaraan::all();
        return view('dashboard.dashboard', compact('siswa'), compact('kendaraan'));
    }

    //Dashboard-Siswa
    public function dashboardsiswa(){
        $kendaraan = Kendaraan::all();
        return view('dashboardsiswa.dashboard-siswa', compact('kendaraan'));
    }

    //About-Siswa
    public function aboutsiswa(){
        return view('aboutsiswa.about-siswa');
    }

    //About
    public function about(){
        return view('about.about');
    }
}
