<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Paket_M;

class paketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$paket =  [
            [
                'nama_paket' => 'Paket Semester SD',
                'id_kelas' => '2,3,4',
                'tarif_cash' => '3420000',
                'tarif_angs' => '600000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'nama_paket' => 'Paket Semester SMP',
                'id_kelas' => '5,6,7',
                'tarif_cash' => '3990000',
                'tarif_angs' => '700000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'nama_paket' => 'Paket Reguler Semester 2 + UN SD',
                'id_kelas' => '4',
                'tarif_cash' => '2850000',
                'tarif_angs' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'nama_paket' => 'Paket Reguler Semester 2 + UN SMP',
                'id_kelas' => '7',
                'tarif_cash' => '3135000',
                'tarif_angs' => '',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];
        foreach ($paket as $paket) {
            Paket_M::updateOrCreate($paket);
        }
    }
}
