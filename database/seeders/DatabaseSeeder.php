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
        //$this->call(DistrictTableSeeder::class);
        //$this->call(ProvinceTableSeeder::class);
        //$this->call(RegencyTableSeeder::class);
        //$this->call(VillageTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(RetailerTabelSeeder::class);
        $this->call(RefProdukTabelSeeder::class);
        $this->call(RetailerProdukTabelSeeder::class);
    }
}
