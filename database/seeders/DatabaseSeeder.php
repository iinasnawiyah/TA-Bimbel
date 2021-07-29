<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(userSeeder::class);
        $this->call(adminSeeder::class);
        $this->call(pengajarSeeder::class);
        $this->call(siswaSeeder::class);
        $this->call(kelasSeeder::class);
        $this->call(paketSeeder::class);
        $this->call(pelayananSeeder::class);
        $this->call(pembayaranSeeder::class);
    }
}
