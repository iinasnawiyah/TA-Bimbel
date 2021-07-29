<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelayanan_M extends Model
{
    protected $table = "pelayanan";
    protected $primaryKey = 'id_pelayanan';
    protected $fillable = ['id_pelayanan','id_paket','id_siswa','id_kelas','id_pengajar','status','status_bayar','created_at','updated_at'];

    public function PelayananWithPaket()
    {
        return $this->hasOne(Paket_M::class, 'id_paket', 'id_paket');
    }

    public function PelayananWithSiswa()
    {
        return $this->hasOne(Siswa_M::class, 'id_siswa', 'id_siswa');
    }

    public function PelayananWithKelas()
    {
        return $this->hasOne(Kelas_M::class, 'id_kelas', 'id_kelas');
    }

    public function PelayananWithPengajar()
    {
        return $this->hasOne(Pengajar_M::class, 'id_pengajar', 'id_pengajar');
    }
}
