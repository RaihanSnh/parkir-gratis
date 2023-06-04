<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //Siswa
    public function siswa(){
        $siswa = Siswa::paginate(5);
        return view('siswa.siswa', ['datasiswa' => $siswa]);
    }

    //Show
    public function show($id){
        $siswa = DB::table('tbl_siswa')->where('idsiswa',$id)->get();

        return view('siswa.show',['datasiswa' => $siswa]);
    }

    //Tambah
    public function tambah(){
        return view('siswa.tambah');
    }
    public function store(Request $request){
        DB::table('tbl_siswa')->insert([
            'idsiswa' => $request->idsiswa,
            'namasiswa' => $request->namasiswa]
        );
        return redirect('/siswa');
    }

    //Edit
    public function edit($idsiswa){
        $siswa = DB::table('tbl_siswa')->where('idsiswa',$idsiswa)->get();

        return view('siswa.edit',['datasiswa' => $siswa]);
    }
    public function update(Request $request){
        DB::table('tbl_siswa')->where('idsiswa',$request->idsiswa)->update([

            'namasiswa' => $request->namasiswa
        ]);

        return redirect('/siswa');
    }

    //Hapus
    public function hapus($idsiswa)
    {
        DB::table('tbl_siswa')->where('idsiswa',$idsiswa)->delete();

        return redirect('/siswa');
    }
}
