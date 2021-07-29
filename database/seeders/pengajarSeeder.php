<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class pengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

		// membuat data dummy sebanyak 10 record
        $id_pengajar = 11;
		for ($x = 1; $x <= 10; $x++) {
            
			// insert data dummy pegawai dengan faker
			DB::table('pengajar')->insert([
				'id_user' => $id_pengajar++,
				'nama_pengajar' => $faker->name,
				'telepon' => $faker->phoneNumber,
				'alamat' => $faker->city,
				'tanggal_masuk' => Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
			]);
		}
    }
}
