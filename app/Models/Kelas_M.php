<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas_M extends Model
{
    public $timestamps = false;
    protected $table = "kelas";
    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas'];
}
