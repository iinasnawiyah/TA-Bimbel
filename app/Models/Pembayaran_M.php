<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pembayaran_M extends Model
{
    protected $table = "pembayaran";
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = ['id_pembayaran','id_pelayanan','bukti_pembayaran','status','created_at','updated_at'];
}
