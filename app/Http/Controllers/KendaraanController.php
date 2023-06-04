<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class KendaraanController extends Controller
{
    //Kendaraan
    public function kendaraan(){
        $kendaraan = Kendaraan::paginate(5);
        $siswa = Siswa::All();

        return view('kendaraan.kendaraan', ['datakendaraan' => $kendaraan]);
    }

    //Show
    public function show($idkendaraan){
        $kendaraan = DB::table('tbl_kendaraan')->where('idkendaraan',$idkendaraan)->get();

        return view('kendaraan.show',['datakendaraan' => $kendaraan]);
    }

    //Tambah
    public function tambah(){
        $kendaraan = Kendaraan::All();
        $siswa = Siswa::All();

        return view('kendaraan.tambah', ['datasiswa' => $siswa]);
    }
    public function store(Request $request){
        DB::table('tbl_kendaraan')->insert([
            'idkendaraan' => $request->idkendaraan,
            'idsiswa' => $request->idsiswa,
            'platnomor' => $request->platnomor    
        ]);
        return redirect('/kendaraan');
    }

    //Edit
    public function edit($idkendaraan){
        $kendaraan = DB::table('tbl_kendaraan')->where('idkendaraan',$idkendaraan)->get();
        $siswa = Siswa::All();

        return view('kendaraan.edit',['datakendaraan' => $kendaraan, 'datasiswa' => $siswa]);
    }
    public function update(Request $request){
        DB::table('tbl_kendaraan')->where('idkendaraan',$request->idkendaraan)->update([

            'idsiswa' => $request->idsiswa,
            'platnomor' => $request->platnomor
        ]);


        return redirect('/kendaraan');
    }

    //Hapus
    public function hapus($idkendaraan)
    {
        DB::table('tbl_kendaraan')->where('idkendaraan',$idkendaraan)->delete();

        return redirect('/kendaraan');
    }
}
