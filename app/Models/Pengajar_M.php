<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User_M;

class Pengajar_M extends Model
{
    public $timestamps = false;
    protected $table = "pengajar";
    protected $primaryKey = 'id_pengajar';
    protected $fillable = ['id_user','nama_pengajar','telepon','alamat','tanggal_masuk'];

    public function juserpengajar()
    {
        return $this->hasOne(User_M::class, 'id_user', 'id_user');
    }
}
