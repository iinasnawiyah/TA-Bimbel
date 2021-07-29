<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa_M extends Model
{
    public $timestamps = false;
    protected $table = "siswa";
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['id_user', 'nama_siswa', 'telepon', 'alamat', 'tanggal_masuk'];

    public function SiswaWithUser()
    {
        return $this->hasOne(User_M::class, 'id_user', 'id_user');
    }
    public function SiswaWithUserOne($query, $id)
    {
        return $query->where('pengajar.id_pengajar', '=', $id);
    }
}
