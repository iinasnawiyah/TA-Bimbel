<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan_M extends Model
{
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['id_pelayanan','deskripsi','bukti_kegiatan','created_at','updated_at'];

    public function KegiatanWithPelayanan()
    {
        return $this->hasOne(Pelayanan_M::class, 'id_pelayanan', 'id_pelayanan');
    }
}
