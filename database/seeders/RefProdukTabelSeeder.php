<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RefProdukTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<30; $i++){
            $id_ref_kategori = $faker->numberBetween($min = 1, $max = 10);
            $id_ref_merk = $faker->numberBetween($min = 1, $max = 10);
            $nama = $faker->company;
            DB::table('ref_produk')->insert([
            'id_ref_kategori' => $id_ref_kategori,
            'id_ref_merk' => $id_ref_merk,
            'nama' => $nama,
            ]);
        }
    }
}
