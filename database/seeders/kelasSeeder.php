<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
                'nama_kelas' => 'TK',
            ]);
		// membuat data dummy sebanyak 10 record
		for ($x = 4; $x <= 9; $x++) {
            // $id_paket = 3;
			// insert data dummy pegawai dengan faker
			DB::table('kelas')->insert([
                'nama_kelas' => $x,
			]);
		}
    }
}
