<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_M extends Model
{
	protected $table = "users";
	protected $primaryKey = 'id_user';
	protected $fillable = [
		'username', 'email', 'email_verified_at', 'password', 'role', 'status', 'remember_token' ,'created_at', 'updated_at'
	];
}
