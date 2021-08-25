<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
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
            $nama = $faker->company;
            $harga_beli = $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000);
            $harga_jual = $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000);
            $stok = $faker->numberBetween($min = 1, $max = 5);
            DB::table('produk_digital')->insert([
            'nama' => $nama,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'stok' => $stok,
            ]);
        }
    }
}
