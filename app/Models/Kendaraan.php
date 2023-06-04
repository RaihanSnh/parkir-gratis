<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table        = 'tbl_kendaraan';
    protected $primaryKey   = 'idkendaraan';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $fillable     = ['idmobil', 'idsiswa', 'platnomor'];

    public function siswa()
    {
        return $this->belongsTo('App\Models\Siswa','idsiswa');
    }
}
