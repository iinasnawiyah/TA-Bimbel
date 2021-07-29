<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket_M extends Model
{
    protected $table = "paket";
    protected $primaryKey = 'id_paket';
    protected $fillable = ['nama_paket','id_kelas','tarif_cash','tarif_angs'];
}
