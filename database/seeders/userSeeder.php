<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $faker = Faker::create('id_ID');

		
		for ($x = 1; $x <= 10; $x++) {
            $id_pengajar = 3;
			DB::table('users')->insert([
				'username' => 'admin'.$x,
    			'email' => 'admin'.$x.'@gmail.com',
    			'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'password' => Hash::make('admin123'),
    			'role' => 'admin',
    			'status' => 'On',
    			'remember_token' => 'admin'.$x,
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]);
		}
        for ($x = 1; $x <= 10; $x++) {
			DB::table('users')->insert([
				'username' => 'pengajar'.$x,
    			'email' => 'pengajar'.$x.'@gmail.com',
    			'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'password' => Hash::make('pengajar'),
    			'role' => 'pengajar',
    			'status' => 'On',
    			'remember_token' => 'pengajar'.$x,
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]);
		}
        for ($x = 1; $x <= 10; $x++) {
			DB::table('users')->insert([
				'username' => 'siswa'.$x,
    			'email' => 'siswa'.$x.'@gmail.com',
    			'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'password' => Hash::make('siswa'),
    			'role' => 'siswa',
    			'status' => 'On',
    			'remember_token' => 'siswa'.$x,
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
    			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]);
		}
    }
}
