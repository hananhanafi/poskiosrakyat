<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RetailerProdukTabelSeeder extends Seeder
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
            $id_ref_produk = 1;
            $id_retailer = $faker->numberBetween($min = 1, $max = 30);
            $kode_produk = $faker->regexify('[0-9]{13}');
            $nama = $faker->company;
            $deskripsi_produk = $faker->catchPhrase;
            $foto = $faker->imageUrl($width = 320, $height = 240, 'produk');
            $harga_jual = $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000);
            $harga_diskon = $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000);
            $stok = $faker->numberBetween($min = 1, $max = 5);
            DB::table('retailer_produk')->insert([
            'id_ref_produk' => $id_ref_produk,
            'id_retailer' => $id_retailer,
            'kode_produk' => $kode_produk,
            'nama' => $nama,
            'deskripsi_produk' => $deskripsi_produk,
            'foto' => $foto,
            'harga_jual' => $harga_jual,
            'harga_diskon' => $harga_diskon,
            'stok' => $stok,
            ]);
        }
    }
}
