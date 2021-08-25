<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_province')->delete();
        
        \DB::table('_province')->insert(array (
            0 => 
            array (
                'province_id' => '11',
                'name' => 'ACEH',
            ),
            1 => 
            array (
                'province_id' => '12',
                'name' => 'SUMATERA UTARA',
            ),
            2 => 
            array (
                'province_id' => '13',
                'name' => 'SUMATERA BARAT',
            ),
            3 => 
            array (
                'province_id' => '14',
                'name' => 'RIAU',
            ),
            4 => 
            array (
                'province_id' => '15',
                'name' => 'JAMBI',
            ),
            5 => 
            array (
                'province_id' => '16',
                'name' => 'SUMATERA SELATAN',
            ),
            6 => 
            array (
                'province_id' => '17',
                'name' => 'BENGKULU',
            ),
            7 => 
            array (
                'province_id' => '18',
                'name' => 'LAMPUNG',
            ),
            8 => 
            array (
                'province_id' => '19',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
            ),
            9 => 
            array (
                'province_id' => '21',
                'name' => 'KEPULAUAN RIAU',
            ),
            10 => 
            array (
                'province_id' => '31',
                'name' => 'DKI JAKARTA',
            ),
            11 => 
            array (
                'province_id' => '32',
                'name' => 'JAWA BARAT',
            ),
            12 => 
            array (
                'province_id' => '33',
                'name' => 'JAWA TENGAH',
            ),
            13 => 
            array (
                'province_id' => '34',
                'name' => 'DAERAH ISTIMEWA YOGYAKARTA',
            ),
            14 => 
            array (
                'province_id' => '35',
                'name' => 'JAWA TIMUR',
            ),
            15 => 
            array (
                'province_id' => '36',
                'name' => 'BANTEN',
            ),
            16 => 
            array (
                'province_id' => '51',
                'name' => 'BALI',
            ),
            17 => 
            array (
                'province_id' => '52',
                'name' => 'NUSA TENGGARA BARAT',
            ),
            18 => 
            array (
                'province_id' => '53',
                'name' => 'NUSA TENGGARA TIMUR',
            ),
            19 => 
            array (
                'province_id' => '61',
                'name' => 'KALIMANTAN BARAT',
            ),
            20 => 
            array (
                'province_id' => '62',
                'name' => 'KALIMANTAN TENGAH',
            ),
            21 => 
            array (
                'province_id' => '63',
                'name' => 'KALIMANTAN SELATAN',
            ),
            22 => 
            array (
                'province_id' => '64',
                'name' => 'KALIMANTAN TIMUR',
            ),
            23 => 
            array (
                'province_id' => '65',
                'name' => 'KALIMANTAN UTARA',
            ),
            24 => 
            array (
                'province_id' => '71',
                'name' => 'SULAWESI UTARA',
            ),
            25 => 
            array (
                'province_id' => '72',
                'name' => 'SULAWESI TENGAH',
            ),
            26 => 
            array (
                'province_id' => '73',
                'name' => 'SULAWESI SELATAN',
            ),
            27 => 
            array (
                'province_id' => '74',
                'name' => 'SULAWESI TENGGARA',
            ),
            28 => 
            array (
                'province_id' => '75',
                'name' => 'GORONTALO',
            ),
            29 => 
            array (
                'province_id' => '76',
                'name' => 'SULAWESI BARAT',
            ),
            30 => 
            array (
                'province_id' => '81',
                'name' => 'MALUKU',
            ),
            31 => 
            array (
                'province_id' => '82',
                'name' => 'MALUKU UTARA',
            ),
            32 => 
            array (
                'province_id' => '91',
                'name' => 'P A P U A',
            ),
            33 => 
            array (
                'province_id' => '92',
                'name' => 'PAPUA BARAT',
            ),
        ));
        
        
    }
}