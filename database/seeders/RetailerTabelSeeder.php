<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RetailerTabelSeeder extends Seeder
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
            $nama_toko = $faker->company;
            $nama_pemilik = $faker->name;
            $username = $faker->userName;
            $password = $faker->password;
            $no_hp = $faker->e164PhoneNumber;
            $alamat = $faker->address;
            $latitude = $faker->latitude;
            $longitude = $faker->longitude;
            $village_id = $faker->numberBetween($min = 1, $max = 83441);
            $file_foto_depan = $faker->imageUrl($width = 640, $height = 480,'people');
            $file_foto_ktp = $faker->imageUrl($width = 640, $height = 480,'people');
            $id_ref_bank = $faker->numberBetween($min = 1, $max = 50);
            $no_rekening = $faker->bankAccountNumber;
            $open_at = $faker->time($format = 'H:i:s', $max = 'now');
            $closed_at = $faker->time($format = 'H:i:s', $max = 'now');
            $is_open = $faker->numberBetween($min = 1, $max = 4);
            $warning_count = $faker->numberBetween($min = 1, $max = 2);
            $suspend_start = $faker->dateTime;
            $suspend_end = $faker->dateTime;
            $suspend_count = $faker->numberBetween($min = 1, $max = 2);
            $saldo = $faker->randomFloat($nbMaxDecimals = 2, $min = 100, $max = 100000);
            DB::table('retailer')->insert([
            'nama_toko' => $nama_toko,
            'nama_pemilik' => $nama_pemilik,
            'username' => $username,
            'password' => $password,
            'no_hp' => $no_hp,
            'alamat' => $alamat,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'village_id'=>$village_id,
            'file_foto_depan'=>$file_foto_depan,
            'file_foto_ktp'=>$file_foto_ktp,
            'id_ref_bank'=>$id_ref_bank,
            'no_rekening'=>$no_rekening,
            'open_at'=>$open_at,
            'closed_at'=>$closed_at,
            'is_open'=>$is_open,
            'warning_count'=>$warning_count,
            'suspend_start'=>$suspend_start,
            'suspend_end'=>$suspend_end,
            'suspend_count'=>$suspend_count,
            'saldo'=>$saldo,
            'reviewed_at'=>NULL,
            ]);
        }
    }
}
