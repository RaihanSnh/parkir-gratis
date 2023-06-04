<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table        = 'tbl_siswa';
    protected $primaryKey   = 'idsiswa';
    protected $keyType      = 'string';
    public $incrementing    = false;
    protected $fillable     = ['idsiswa', 'namasiswa'];
    public function kendaraan()
    {
        return $this->hasMany('App\Models\Kendaraan', 'idsiswa');
    }
}
