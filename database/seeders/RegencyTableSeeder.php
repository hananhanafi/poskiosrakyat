<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('_regency')->delete();
        
        \DB::table('_regency')->insert(array (
            0 => 
            array (
                'regency_id' => '11.01',
                'province_id' => '11',
                'name' => 'KAB. ACEH SELATAN',
            ),
            1 => 
            array (
                'regency_id' => '11.02',
                'province_id' => '11',
                'name' => 'KAB. ACEH TENGGARA',
            ),
            2 => 
            array (
                'regency_id' => '11.03',
                'province_id' => '11',
                'name' => 'KAB. ACEH TIMUR',
            ),
            3 => 
            array (
                'regency_id' => '11.04',
                'province_id' => '11',
                'name' => 'KAB. ACEH TENGAH',
            ),
            4 => 
            array (
                'regency_id' => '11.05',
                'province_id' => '11',
                'name' => 'KAB. ACEH BARAT',
            ),
            5 => 
            array (
                'regency_id' => '11.06',
                'province_id' => '11',
                'name' => 'KAB. ACEH BESAR',
            ),
            6 => 
            array (
                'regency_id' => '11.07',
                'province_id' => '11',
                'name' => 'KAB. PIDIE',
            ),
            7 => 
            array (
                'regency_id' => '11.08',
                'province_id' => '11',
                'name' => 'KAB. ACEH UTARA',
            ),
            8 => 
            array (
                'regency_id' => '11.09',
                'province_id' => '11',
                'name' => 'KAB. SIMEULUE',
            ),
            9 => 
            array (
                'regency_id' => '11.10',
                'province_id' => '11',
                'name' => 'KAB. ACEH SINGKIL',
            ),
            10 => 
            array (
                'regency_id' => '11.11',
                'province_id' => '11',
                'name' => 'KAB. BIREUEN',
            ),
            11 => 
            array (
                'regency_id' => '11.12',
                'province_id' => '11',
                'name' => 'KAB. ACEH BARAT DAYA',
            ),
            12 => 
            array (
                'regency_id' => '11.13',
                'province_id' => '11',
                'name' => 'KAB. GAYO LUES',
            ),
            13 => 
            array (
                'regency_id' => '11.14',
                'province_id' => '11',
                'name' => 'KAB. ACEH JAYA',
            ),
            14 => 
            array (
                'regency_id' => '11.15',
                'province_id' => '11',
                'name' => 'KAB. NAGAN RAYA',
            ),
            15 => 
            array (
                'regency_id' => '11.16',
                'province_id' => '11',
                'name' => 'KAB. ACEH TAMIANG',
            ),
            16 => 
            array (
                'regency_id' => '11.17',
                'province_id' => '11',
                'name' => 'KAB. BENER MERIAH',
            ),
            17 => 
            array (
                'regency_id' => '11.18',
                'province_id' => '11',
                'name' => 'KAB. PIDIE JAYA',
            ),
            18 => 
            array (
                'regency_id' => '11.71',
                'province_id' => '11',
                'name' => 'KOTA BANDA ACEH',
            ),
            19 => 
            array (
                'regency_id' => '11.72',
                'province_id' => '11',
                'name' => 'KOTA SABANG',
            ),
            20 => 
            array (
                'regency_id' => '11.73',
                'province_id' => '11',
                'name' => 'KOTA LHOKSEUMAWE',
            ),
            21 => 
            array (
                'regency_id' => '11.74',
                'province_id' => '11',
                'name' => 'KOTA LANGSA',
            ),
            22 => 
            array (
                'regency_id' => '11.75',
                'province_id' => '11',
                'name' => 'KOTA SUBULUSSALAM',
            ),
            23 => 
            array (
                'regency_id' => '12.01',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI TENGAH',
            ),
            24 => 
            array (
                'regency_id' => '12.02',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI UTARA',
            ),
            25 => 
            array (
                'regency_id' => '12.03',
                'province_id' => '12',
                'name' => 'KAB. TAPANULI SELATAN',
            ),
            26 => 
            array (
                'regency_id' => '12.04',
                'province_id' => '12',
                'name' => 'KAB. NIAS',
            ),
            27 => 
            array (
                'regency_id' => '12.05',
                'province_id' => '12',
                'name' => 'KAB. LANGKAT',
            ),
            28 => 
            array (
                'regency_id' => '12.06',
                'province_id' => '12',
                'name' => 'KAB. KARO',
            ),
            29 => 
            array (
                'regency_id' => '12.07',
                'province_id' => '12',
                'name' => 'KAB. DELI SERDANG',
            ),
            30 => 
            array (
                'regency_id' => '12.08',
                'province_id' => '12',
                'name' => 'KAB. SIMALUNGUN',
            ),
            31 => 
            array (
                'regency_id' => '12.09',
                'province_id' => '12',
                'name' => 'KAB. ASAHAN',
            ),
            32 => 
            array (
                'regency_id' => '12.10',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU',
            ),
            33 => 
            array (
                'regency_id' => '12.11',
                'province_id' => '12',
                'name' => 'KAB. DAIRI',
            ),
            34 => 
            array (
                'regency_id' => '12.12',
                'province_id' => '12',
                'name' => 'KAB. TOBA SAMOSIR',
            ),
            35 => 
            array (
                'regency_id' => '12.13',
                'province_id' => '12',
                'name' => 'KAB. MANDAILING NATAL',
            ),
            36 => 
            array (
                'regency_id' => '12.14',
                'province_id' => '12',
                'name' => 'KAB. NIAS SELATAN',
            ),
            37 => 
            array (
                'regency_id' => '12.15',
                'province_id' => '12',
                'name' => 'KAB. PAKPAK BHARAT',
            ),
            38 => 
            array (
                'regency_id' => '12.16',
                'province_id' => '12',
                'name' => 'KAB. HUMBANG HASUNDUTAN',
            ),
            39 => 
            array (
                'regency_id' => '12.17',
                'province_id' => '12',
                'name' => 'KAB. SAMOSIR',
            ),
            40 => 
            array (
                'regency_id' => '12.18',
                'province_id' => '12',
                'name' => 'KAB. SERDANG BEDAGAI',
            ),
            41 => 
            array (
                'regency_id' => '12.19',
                'province_id' => '12',
                'name' => 'KAB. BATU BARA',
            ),
            42 => 
            array (
                'regency_id' => '12.20',
                'province_id' => '12',
                'name' => 'KAB. PADANG LAWAS UTARA',
            ),
            43 => 
            array (
                'regency_id' => '12.21',
                'province_id' => '12',
                'name' => 'KAB. PADANG LAWAS',
            ),
            44 => 
            array (
                'regency_id' => '12.22',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU SELATAN',
            ),
            45 => 
            array (
                'regency_id' => '12.23',
                'province_id' => '12',
                'name' => 'KAB. LABUHANBATU UTARA',
            ),
            46 => 
            array (
                'regency_id' => '12.24',
                'province_id' => '12',
                'name' => 'KAB. NIAS UTARA',
            ),
            47 => 
            array (
                'regency_id' => '12.25',
                'province_id' => '12',
                'name' => 'KAB. NIAS BARAT',
            ),
            48 => 
            array (
                'regency_id' => '12.71',
                'province_id' => '12',
                'name' => 'KOTA MEDAN',
            ),
            49 => 
            array (
                'regency_id' => '12.72',
                'province_id' => '12',
                'name' => 'KOTA PEMATANGSIANTAR',
            ),
            50 => 
            array (
                'regency_id' => '12.73',
                'province_id' => '12',
                'name' => 'KOTA SIBOLGA',
            ),
            51 => 
            array (
                'regency_id' => '12.74',
                'province_id' => '12',
                'name' => 'KOTA TANJUNG BALAI',
            ),
            52 => 
            array (
                'regency_id' => '12.75',
                'province_id' => '12',
                'name' => 'KOTA BINJAI',
            ),
            53 => 
            array (
                'regency_id' => '12.76',
                'province_id' => '12',
                'name' => 'KOTA TEBING TINGGI',
            ),
            54 => 
            array (
                'regency_id' => '12.77',
                'province_id' => '12',
                'name' => 'KOTA PADANGSIDIMPUAN',
            ),
            55 => 
            array (
                'regency_id' => '12.78',
                'province_id' => '12',
                'name' => 'KOTA GUNUNGSITOLI',
            ),
            56 => 
            array (
                'regency_id' => '13.01',
                'province_id' => '13',
                'name' => 'KAB. PESISIR SELATAN',
            ),
            57 => 
            array (
                'regency_id' => '13.02',
                'province_id' => '13',
                'name' => 'KAB. SOLOK',
            ),
            58 => 
            array (
                'regency_id' => '13.03',
                'province_id' => '13',
                'name' => 'KAB. SIJUNJUNG',
            ),
            59 => 
            array (
                'regency_id' => '13.04',
                'province_id' => '13',
                'name' => 'KAB. TANAH DATAR',
            ),
            60 => 
            array (
                'regency_id' => '13.05',
                'province_id' => '13',
                'name' => 'KAB. PADANG PARIAMAN',
            ),
            61 => 
            array (
                'regency_id' => '13.06',
                'province_id' => '13',
                'name' => 'KAB. AGAM',
            ),
            62 => 
            array (
                'regency_id' => '13.07',
                'province_id' => '13',
                'name' => 'KAB. LIMA PULUH KOTA',
            ),
            63 => 
            array (
                'regency_id' => '13.08',
                'province_id' => '13',
                'name' => 'KAB. PASAMAN',
            ),
            64 => 
            array (
                'regency_id' => '13.09',
                'province_id' => '13',
                'name' => 'KAB. KEPULAUAN MENTAWAI',
            ),
            65 => 
            array (
                'regency_id' => '13.10',
                'province_id' => '13',
                'name' => 'KAB. DHARMASRAYA',
            ),
            66 => 
            array (
                'regency_id' => '13.11',
                'province_id' => '13',
                'name' => 'KAB. SOLOK SELATAN',
            ),
            67 => 
            array (
                'regency_id' => '13.12',
                'province_id' => '13',
                'name' => 'KAB. PASAMAN BARAT',
            ),
            68 => 
            array (
                'regency_id' => '13.71',
                'province_id' => '13',
                'name' => 'KOTA PADANG',
            ),
            69 => 
            array (
                'regency_id' => '13.72',
                'province_id' => '13',
                'name' => 'KOTA SOLOK',
            ),
            70 => 
            array (
                'regency_id' => '13.73',
                'province_id' => '13',
                'name' => 'KOTA SAWAHLUNTO',
            ),
            71 => 
            array (
                'regency_id' => '13.74',
                'province_id' => '13',
                'name' => 'KOTA PADANG PANJANG',
            ),
            72 => 
            array (
                'regency_id' => '13.75',
                'province_id' => '13',
                'name' => 'KOTA BUKITTINGGI',
            ),
            73 => 
            array (
                'regency_id' => '13.76',
                'province_id' => '13',
                'name' => 'KOTA PAYAKUMBUH',
            ),
            74 => 
            array (
                'regency_id' => '13.77',
                'province_id' => '13',
                'name' => 'KOTA PARIAMAN',
            ),
            75 => 
            array (
                'regency_id' => '14.01',
                'province_id' => '14',
                'name' => 'KAB. KAMPAR',
            ),
            76 => 
            array (
                'regency_id' => '14.02',
                'province_id' => '14',
                'name' => 'KAB. INDRAGIRI HULU',
            ),
            77 => 
            array (
                'regency_id' => '14.03',
                'province_id' => '14',
                'name' => 'KAB. BENGKALIS',
            ),
            78 => 
            array (
                'regency_id' => '14.04',
                'province_id' => '14',
                'name' => 'KAB. INDRAGIRI HILIR',
            ),
            79 => 
            array (
                'regency_id' => '14.05',
                'province_id' => '14',
                'name' => 'KAB. PELALAWAN',
            ),
            80 => 
            array (
                'regency_id' => '14.06',
                'province_id' => '14',
                'name' => 'KAB. ROKAN HULU',
            ),
            81 => 
            array (
                'regency_id' => '14.07',
                'province_id' => '14',
                'name' => 'KAB. ROKAN HILIR',
            ),
            82 => 
            array (
                'regency_id' => '14.08',
                'province_id' => '14',
                'name' => 'KAB. SIAK',
            ),
            83 => 
            array (
                'regency_id' => '14.09',
                'province_id' => '14',
                'name' => 'KAB. KUANTAN SINGINGI',
            ),
            84 => 
            array (
                'regency_id' => '14.10',
                'province_id' => '14',
                'name' => 'KAB. KEPULAUAN MERANTI',
            ),
            85 => 
            array (
                'regency_id' => '14.71',
                'province_id' => '14',
                'name' => 'KOTA PEKANBARU',
            ),
            86 => 
            array (
                'regency_id' => '14.72',
                'province_id' => '14',
                'name' => 'KOTA DUMAI',
            ),
            87 => 
            array (
                'regency_id' => '15.01',
                'province_id' => '15',
                'name' => 'KAB. KERINCI',
            ),
            88 => 
            array (
                'regency_id' => '15.02',
                'province_id' => '15',
                'name' => 'KAB. MERANGIN',
            ),
            89 => 
            array (
                'regency_id' => '15.03',
                'province_id' => '15',
                'name' => 'KAB. SAROLANGUN',
            ),
            90 => 
            array (
                'regency_id' => '15.04',
                'province_id' => '15',
                'name' => 'KAB. BATANGHARI',
            ),
            91 => 
            array (
                'regency_id' => '15.05',
                'province_id' => '15',
                'name' => 'KAB. MUARO JAMBI',
            ),
            92 => 
            array (
                'regency_id' => '15.06',
                'province_id' => '15',
                'name' => 'KAB. TANJUNG JABUNG BARAT',
            ),
            93 => 
            array (
                'regency_id' => '15.07',
                'province_id' => '15',
                'name' => 'KAB. TANJUNG JABUNG TIMUR',
            ),
            94 => 
            array (
                'regency_id' => '15.08',
                'province_id' => '15',
                'name' => 'KAB. BUNGO',
            ),
            95 => 
            array (
                'regency_id' => '15.09',
                'province_id' => '15',
                'name' => 'KAB. TEBO',
            ),
            96 => 
            array (
                'regency_id' => '15.71',
                'province_id' => '15',
                'name' => 'KOTA JAMBI',
            ),
            97 => 
            array (
                'regency_id' => '15.72',
                'province_id' => '15',
                'name' => 'KOTA SUNGAI PENUH',
            ),
            98 => 
            array (
                'regency_id' => '16.01',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU',
            ),
            99 => 
            array (
                'regency_id' => '16.02',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ILIR',
            ),
            100 => 
            array (
                'regency_id' => '16.03',
                'province_id' => '16',
                'name' => 'KAB. MUARA ENIM',
            ),
            101 => 
            array (
                'regency_id' => '16.04',
                'province_id' => '16',
                'name' => 'KAB. LAHAT',
            ),
            102 => 
            array (
                'regency_id' => '16.05',
                'province_id' => '16',
                'name' => 'KAB. MUSI RAWAS',
            ),
            103 => 
            array (
                'regency_id' => '16.06',
                'province_id' => '16',
                'name' => 'KAB. MUSI BANYUASIN',
            ),
            104 => 
            array (
                'regency_id' => '16.07',
                'province_id' => '16',
                'name' => 'KAB. BANYUASIN',
            ),
            105 => 
            array (
                'regency_id' => '16.08',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU TIMUR',
            ),
            106 => 
            array (
                'regency_id' => '16.09',
                'province_id' => '16',
                'name' => 'KAB. OGAN KOMERING ULU SELATAN',
            ),
            107 => 
            array (
                'regency_id' => '16.10',
                'province_id' => '16',
                'name' => 'KAB. OGAN ILIR',
            ),
            108 => 
            array (
                'regency_id' => '16.11',
                'province_id' => '16',
                'name' => 'KAB. EMPAT LAWANG',
            ),
            109 => 
            array (
                'regency_id' => '16.12',
                'province_id' => '16',
                'name' => 'KAB. PENUKAL ABAB LEMATANG ILIR',
            ),
            110 => 
            array (
                'regency_id' => '16.13',
                'province_id' => '16',
                'name' => 'KAB. MUSI RAWAS UTARA',
            ),
            111 => 
            array (
                'regency_id' => '16.71',
                'province_id' => '16',
                'name' => 'KOTA PALEMBANG',
            ),
            112 => 
            array (
                'regency_id' => '16.72',
                'province_id' => '16',
                'name' => 'KOTA PAGAR ALAM',
            ),
            113 => 
            array (
                'regency_id' => '16.73',
                'province_id' => '16',
                'name' => 'KOTA LUBUK LINGGAU',
            ),
            114 => 
            array (
                'regency_id' => '16.74',
                'province_id' => '16',
                'name' => 'KOTA PRABUMULIH',
            ),
            115 => 
            array (
                'regency_id' => '17.01',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU SELATAN',
            ),
            116 => 
            array (
                'regency_id' => '17.02',
                'province_id' => '17',
                'name' => 'KAB. REJANG LEBONG',
            ),
            117 => 
            array (
                'regency_id' => '17.03',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU UTARA',
            ),
            118 => 
            array (
                'regency_id' => '17.04',
                'province_id' => '17',
                'name' => 'KAB. KAUR',
            ),
            119 => 
            array (
                'regency_id' => '17.05',
                'province_id' => '17',
                'name' => 'KAB. SELUMA',
            ),
            120 => 
            array (
                'regency_id' => '17.06',
                'province_id' => '17',
                'name' => 'KAB. MUKO MUKO',
            ),
            121 => 
            array (
                'regency_id' => '17.07',
                'province_id' => '17',
                'name' => 'KAB. LEBONG',
            ),
            122 => 
            array (
                'regency_id' => '17.08',
                'province_id' => '17',
                'name' => 'KAB. KEPAHIANG',
            ),
            123 => 
            array (
                'regency_id' => '17.09',
                'province_id' => '17',
                'name' => 'KAB. BENGKULU TENGAH',
            ),
            124 => 
            array (
                'regency_id' => '17.71',
                'province_id' => '17',
                'name' => 'KOTA BENGKULU',
            ),
            125 => 
            array (
                'regency_id' => '18.01',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG SELATAN',
            ),
            126 => 
            array (
                'regency_id' => '18.02',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG TENGAH',
            ),
            127 => 
            array (
                'regency_id' => '18.03',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG UTARA',
            ),
            128 => 
            array (
                'regency_id' => '18.04',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG BARAT',
            ),
            129 => 
            array (
                'regency_id' => '18.05',
                'province_id' => '18',
                'name' => 'KAB. TULANG BAWANG',
            ),
            130 => 
            array (
                'regency_id' => '18.06',
                'province_id' => '18',
                'name' => 'KAB. TANGGAMUS',
            ),
            131 => 
            array (
                'regency_id' => '18.07',
                'province_id' => '18',
                'name' => 'KAB. LAMPUNG TIMUR',
            ),
            132 => 
            array (
                'regency_id' => '18.08',
                'province_id' => '18',
                'name' => 'KAB. WAY KANAN',
            ),
            133 => 
            array (
                'regency_id' => '18.09',
                'province_id' => '18',
                'name' => 'KAB. PESAWARAN',
            ),
            134 => 
            array (
                'regency_id' => '18.10',
                'province_id' => '18',
                'name' => 'KAB. PRINGSEWU',
            ),
            135 => 
            array (
                'regency_id' => '18.11',
                'province_id' => '18',
                'name' => 'KAB. MESUJI',
            ),
            136 => 
            array (
                'regency_id' => '18.12',
                'province_id' => '18',
                'name' => 'KAB. TULANG BAWANG BARAT',
            ),
            137 => 
            array (
                'regency_id' => '18.13',
                'province_id' => '18',
                'name' => 'KAB. PESISIR BARAT',
            ),
            138 => 
            array (
                'regency_id' => '18.71',
                'province_id' => '18',
                'name' => 'KOTA BANDAR LAMPUNG',
            ),
            139 => 
            array (
                'regency_id' => '18.72',
                'province_id' => '18',
                'name' => 'KOTA METRO',
            ),
            140 => 
            array (
                'regency_id' => '19.01',
                'province_id' => '19',
                'name' => 'KAB. BANGKA',
            ),
            141 => 
            array (
                'regency_id' => '19.02',
                'province_id' => '19',
                'name' => 'KAB. BELITUNG',
            ),
            142 => 
            array (
                'regency_id' => '19.03',
                'province_id' => '19',
                'name' => 'KAB. BANGKA SELATAN',
            ),
            143 => 
            array (
                'regency_id' => '19.04',
                'province_id' => '19',
                'name' => 'KAB. BANGKA TENGAH',
            ),
            144 => 
            array (
                'regency_id' => '19.05',
                'province_id' => '19',
                'name' => 'KAB. BANGKA BARAT',
            ),
            145 => 
            array (
                'regency_id' => '19.06',
                'province_id' => '19',
                'name' => 'KAB. BELITUNG TIMUR',
            ),
            146 => 
            array (
                'regency_id' => '19.71',
                'province_id' => '19',
                'name' => 'KOTA PANGKAL PINANG',
            ),
            147 => 
            array (
                'regency_id' => '21.01',
                'province_id' => '21',
                'name' => 'KAB. BINTAN',
            ),
            148 => 
            array (
                'regency_id' => '21.02',
                'province_id' => '21',
                'name' => 'KAB. KARIMUN',
            ),
            149 => 
            array (
                'regency_id' => '21.03',
                'province_id' => '21',
                'name' => 'KAB. NATUNA',
            ),
            150 => 
            array (
                'regency_id' => '21.04',
                'province_id' => '21',
                'name' => 'KAB. LINGGA',
            ),
            151 => 
            array (
                'regency_id' => '21.05',
                'province_id' => '21',
                'name' => 'KAB. KEPULAUAN ANAMBAS',
            ),
            152 => 
            array (
                'regency_id' => '21.71',
                'province_id' => '21',
                'name' => 'KOTA BATAM',
            ),
            153 => 
            array (
                'regency_id' => '21.72',
                'province_id' => '21',
                'name' => 'KOTA TANJUNG PINANG',
            ),
            154 => 
            array (
                'regency_id' => '31.01',
                'province_id' => '31',
                'name' => 'KAB. ADM. KEP. SERIBU',
            ),
            155 => 
            array (
                'regency_id' => '31.71',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA PUSAT',
            ),
            156 => 
            array (
                'regency_id' => '31.72',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA UTARA',
            ),
            157 => 
            array (
                'regency_id' => '31.73',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA BARAT',
            ),
            158 => 
            array (
                'regency_id' => '31.74',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA SELATAN',
            ),
            159 => 
            array (
                'regency_id' => '31.75',
                'province_id' => '31',
                'name' => 'KOTA ADM. JAKARTA TIMUR',
            ),
            160 => 
            array (
                'regency_id' => '32.01',
                'province_id' => '32',
                'name' => 'KAB. BOGOR',
            ),
            161 => 
            array (
                'regency_id' => '32.02',
                'province_id' => '32',
                'name' => 'KAB. SUKABUMI',
            ),
            162 => 
            array (
                'regency_id' => '32.03',
                'province_id' => '32',
                'name' => 'KAB. CIANJUR',
            ),
            163 => 
            array (
                'regency_id' => '32.04',
                'province_id' => '32',
                'name' => 'KAB. BANDUNG',
            ),
            164 => 
            array (
                'regency_id' => '32.05',
                'province_id' => '32',
                'name' => 'KAB. GARUT',
            ),
            165 => 
            array (
                'regency_id' => '32.06',
                'province_id' => '32',
                'name' => 'KAB. TASIKMALAYA',
            ),
            166 => 
            array (
                'regency_id' => '32.07',
                'province_id' => '32',
                'name' => 'KAB. CIAMIS',
            ),
            167 => 
            array (
                'regency_id' => '32.08',
                'province_id' => '32',
                'name' => 'KAB. KUNINGAN',
            ),
            168 => 
            array (
                'regency_id' => '32.09',
                'province_id' => '32',
                'name' => 'KAB. CIREBON',
            ),
            169 => 
            array (
                'regency_id' => '32.10',
                'province_id' => '32',
                'name' => 'KAB. MAJALENGKA',
            ),
            170 => 
            array (
                'regency_id' => '32.11',
                'province_id' => '32',
                'name' => 'KAB. SUMEDANG',
            ),
            171 => 
            array (
                'regency_id' => '32.12',
                'province_id' => '32',
                'name' => 'KAB. INDRAMAYU',
            ),
            172 => 
            array (
                'regency_id' => '32.13',
                'province_id' => '32',
                'name' => 'KAB. SUBANG',
            ),
            173 => 
            array (
                'regency_id' => '32.14',
                'province_id' => '32',
                'name' => 'KAB. PURWAKARTA',
            ),
            174 => 
            array (
                'regency_id' => '32.15',
                'province_id' => '32',
                'name' => 'KAB. KARAWANG',
            ),
            175 => 
            array (
                'regency_id' => '32.16',
                'province_id' => '32',
                'name' => 'KAB. BEKASI',
            ),
            176 => 
            array (
                'regency_id' => '32.17',
                'province_id' => '32',
                'name' => 'KAB. BANDUNG BARAT',
            ),
            177 => 
            array (
                'regency_id' => '32.18',
                'province_id' => '32',
                'name' => 'KAB. PANGANDARAN',
            ),
            178 => 
            array (
                'regency_id' => '32.71',
                'province_id' => '32',
                'name' => 'KOTA BOGOR',
            ),
            179 => 
            array (
                'regency_id' => '32.72',
                'province_id' => '32',
                'name' => 'KOTA SUKABUMI',
            ),
            180 => 
            array (
                'regency_id' => '32.73',
                'province_id' => '32',
                'name' => 'KOTA BANDUNG',
            ),
            181 => 
            array (
                'regency_id' => '32.74',
                'province_id' => '32',
                'name' => 'KOTA CIREBON',
            ),
            182 => 
            array (
                'regency_id' => '32.75',
                'province_id' => '32',
                'name' => 'KOTA BEKASI',
            ),
            183 => 
            array (
                'regency_id' => '32.76',
                'province_id' => '32',
                'name' => 'KOTA DEPOK',
            ),
            184 => 
            array (
                'regency_id' => '32.77',
                'province_id' => '32',
                'name' => 'KOTA CIMAHI',
            ),
            185 => 
            array (
                'regency_id' => '32.78',
                'province_id' => '32',
                'name' => 'KOTA TASIKMALAYA',
            ),
            186 => 
            array (
                'regency_id' => '32.79',
                'province_id' => '32',
                'name' => 'KOTA BANJAR',
            ),
            187 => 
            array (
                'regency_id' => '33.01',
                'province_id' => '33',
                'name' => 'KAB. CILACAP',
            ),
            188 => 
            array (
                'regency_id' => '33.02',
                'province_id' => '33',
                'name' => 'KAB. BANYUMAS',
            ),
            189 => 
            array (
                'regency_id' => '33.03',
                'province_id' => '33',
                'name' => 'KAB. PURBALINGGA',
            ),
            190 => 
            array (
                'regency_id' => '33.04',
                'province_id' => '33',
                'name' => 'KAB. BANJARNEGARA',
            ),
            191 => 
            array (
                'regency_id' => '33.05',
                'province_id' => '33',
                'name' => 'KAB. KEBUMEN',
            ),
            192 => 
            array (
                'regency_id' => '33.06',
                'province_id' => '33',
                'name' => 'KAB. PURWOREJO',
            ),
            193 => 
            array (
                'regency_id' => '33.07',
                'province_id' => '33',
                'name' => 'KAB. WONOSOBO',
            ),
            194 => 
            array (
                'regency_id' => '33.08',
                'province_id' => '33',
                'name' => 'KAB. MAGELANG',
            ),
            195 => 
            array (
                'regency_id' => '33.09',
                'province_id' => '33',
                'name' => 'KAB. BOYOLALI',
            ),
            196 => 
            array (
                'regency_id' => '33.10',
                'province_id' => '33',
                'name' => 'KAB. KLATEN',
            ),
            197 => 
            array (
                'regency_id' => '33.11',
                'province_id' => '33',
                'name' => 'KAB. SUKOHARJO',
            ),
            198 => 
            array (
                'regency_id' => '33.12',
                'province_id' => '33',
                'name' => 'KAB. WONOGIRI',
            ),
            199 => 
            array (
                'regency_id' => '33.13',
                'province_id' => '33',
                'name' => 'KAB. KARANGANYAR',
            ),
            200 => 
            array (
                'regency_id' => '33.14',
                'province_id' => '33',
                'name' => 'KAB. SRAGEN',
            ),
            201 => 
            array (
                'regency_id' => '33.15',
                'province_id' => '33',
                'name' => 'KAB. GROBOGAN',
            ),
            202 => 
            array (
                'regency_id' => '33.16',
                'province_id' => '33',
                'name' => 'KAB. BLORA',
            ),
            203 => 
            array (
                'regency_id' => '33.17',
                'province_id' => '33',
                'name' => 'KAB. REMBANG',
            ),
            204 => 
            array (
                'regency_id' => '33.18',
                'province_id' => '33',
                'name' => 'KAB. PATI',
            ),
            205 => 
            array (
                'regency_id' => '33.19',
                'province_id' => '33',
                'name' => 'KAB. KUDUS',
            ),
            206 => 
            array (
                'regency_id' => '33.20',
                'province_id' => '33',
                'name' => 'KAB. JEPARA',
            ),
            207 => 
            array (
                'regency_id' => '33.21',
                'province_id' => '33',
                'name' => 'KAB. DEMAK',
            ),
            208 => 
            array (
                'regency_id' => '33.22',
                'province_id' => '33',
                'name' => 'KAB. SEMARANG',
            ),
            209 => 
            array (
                'regency_id' => '33.23',
                'province_id' => '33',
                'name' => 'KAB. TEMANGGUNG',
            ),
            210 => 
            array (
                'regency_id' => '33.24',
                'province_id' => '33',
                'name' => 'KAB. KENDAL',
            ),
            211 => 
            array (
                'regency_id' => '33.25',
                'province_id' => '33',
                'name' => 'KAB. BATANG',
            ),
            212 => 
            array (
                'regency_id' => '33.26',
                'province_id' => '33',
                'name' => 'KAB. PEKALONGAN',
            ),
            213 => 
            array (
                'regency_id' => '33.27',
                'province_id' => '33',
                'name' => 'KAB. PEMALANG',
            ),
            214 => 
            array (
                'regency_id' => '33.28',
                'province_id' => '33',
                'name' => 'KAB. TEGAL',
            ),
            215 => 
            array (
                'regency_id' => '33.29',
                'province_id' => '33',
                'name' => 'KAB. BREBES',
            ),
            216 => 
            array (
                'regency_id' => '33.71',
                'province_id' => '33',
                'name' => 'KOTA MAGELANG',
            ),
            217 => 
            array (
                'regency_id' => '33.72',
                'province_id' => '33',
                'name' => 'KOTA SURAKARTA',
            ),
            218 => 
            array (
                'regency_id' => '33.73',
                'province_id' => '33',
                'name' => 'KOTA SALATIGA',
            ),
            219 => 
            array (
                'regency_id' => '33.74',
                'province_id' => '33',
                'name' => 'KOTA SEMARANG',
            ),
            220 => 
            array (
                'regency_id' => '33.75',
                'province_id' => '33',
                'name' => 'KOTA PEKALONGAN',
            ),
            221 => 
            array (
                'regency_id' => '33.76',
                'province_id' => '33',
                'name' => 'KOTA TEGAL',
            ),
            222 => 
            array (
                'regency_id' => '34.01',
                'province_id' => '34',
                'name' => 'KAB. KULON PROGO',
            ),
            223 => 
            array (
                'regency_id' => '34.02',
                'province_id' => '34',
                'name' => 'KAB. BANTUL',
            ),
            224 => 
            array (
                'regency_id' => '34.03',
                'province_id' => '34',
                'name' => 'KAB. GUNUNGKIDUL',
            ),
            225 => 
            array (
                'regency_id' => '34.04',
                'province_id' => '34',
                'name' => 'KAB. SLEMAN',
            ),
            226 => 
            array (
                'regency_id' => '34.71',
                'province_id' => '34',
                'name' => 'KOTA YOGYAKARTA',
            ),
            227 => 
            array (
                'regency_id' => '35.01',
                'province_id' => '35',
                'name' => 'KAB. PACITAN',
            ),
            228 => 
            array (
                'regency_id' => '35.02',
                'province_id' => '35',
                'name' => 'KAB. PONOROGO',
            ),
            229 => 
            array (
                'regency_id' => '35.03',
                'province_id' => '35',
                'name' => 'KAB. TRENGGALEK',
            ),
            230 => 
            array (
                'regency_id' => '35.04',
                'province_id' => '35',
                'name' => 'KAB. TULUNGAGUNG',
            ),
            231 => 
            array (
                'regency_id' => '35.05',
                'province_id' => '35',
                'name' => 'KAB. BLITAR',
            ),
            232 => 
            array (
                'regency_id' => '35.06',
                'province_id' => '35',
                'name' => 'KAB. KEDIRI',
            ),
            233 => 
            array (
                'regency_id' => '35.07',
                'province_id' => '35',
                'name' => 'KAB. MALANG',
            ),
            234 => 
            array (
                'regency_id' => '35.08',
                'province_id' => '35',
                'name' => 'KAB. LUMAJANG',
            ),
            235 => 
            array (
                'regency_id' => '35.09',
                'province_id' => '35',
                'name' => 'KAB. JEMBER',
            ),
            236 => 
            array (
                'regency_id' => '35.10',
                'province_id' => '35',
                'name' => 'KAB. BANYUWANGI',
            ),
            237 => 
            array (
                'regency_id' => '35.11',
                'province_id' => '35',
                'name' => 'KAB. BONDOWOSO',
            ),
            238 => 
            array (
                'regency_id' => '35.12',
                'province_id' => '35',
                'name' => 'KAB. SITUBONDO',
            ),
            239 => 
            array (
                'regency_id' => '35.13',
                'province_id' => '35',
                'name' => 'KAB. PROBOLINGGO',
            ),
            240 => 
            array (
                'regency_id' => '35.14',
                'province_id' => '35',
                'name' => 'KAB. PASURUAN',
            ),
            241 => 
            array (
                'regency_id' => '35.15',
                'province_id' => '35',
                'name' => 'KAB. SIDOARJO',
            ),
            242 => 
            array (
                'regency_id' => '35.16',
                'province_id' => '35',
                'name' => 'KAB. MOJOKERTO',
            ),
            243 => 
            array (
                'regency_id' => '35.17',
                'province_id' => '35',
                'name' => 'KAB. JOMBANG',
            ),
            244 => 
            array (
                'regency_id' => '35.18',
                'province_id' => '35',
                'name' => 'KAB. NGANJUK',
            ),
            245 => 
            array (
                'regency_id' => '35.19',
                'province_id' => '35',
                'name' => 'KAB. MADIUN',
            ),
            246 => 
            array (
                'regency_id' => '35.20',
                'province_id' => '35',
                'name' => 'KAB. MAGETAN',
            ),
            247 => 
            array (
                'regency_id' => '35.21',
                'province_id' => '35',
                'name' => 'KAB. NGAWI',
            ),
            248 => 
            array (
                'regency_id' => '35.22',
                'province_id' => '35',
                'name' => 'KAB. BOJONEGORO',
            ),
            249 => 
            array (
                'regency_id' => '35.23',
                'province_id' => '35',
                'name' => 'KAB. TUBAN',
            ),
            250 => 
            array (
                'regency_id' => '35.24',
                'province_id' => '35',
                'name' => 'KAB. LAMONGAN',
            ),
            251 => 
            array (
                'regency_id' => '35.25',
                'province_id' => '35',
                'name' => 'KAB. GRESIK',
            ),
            252 => 
            array (
                'regency_id' => '35.26',
                'province_id' => '35',
                'name' => 'KAB. BANGKALAN',
            ),
            253 => 
            array (
                'regency_id' => '35.27',
                'province_id' => '35',
                'name' => 'KAB. SAMPANG',
            ),
            254 => 
            array (
                'regency_id' => '35.28',
                'province_id' => '35',
                'name' => 'KAB. PAMEKASAN',
            ),
            255 => 
            array (
                'regency_id' => '35.29',
                'province_id' => '35',
                'name' => 'KAB. SUMENEP',
            ),
            256 => 
            array (
                'regency_id' => '35.71',
                'province_id' => '35',
                'name' => 'KOTA KEDIRI',
            ),
            257 => 
            array (
                'regency_id' => '35.72',
                'province_id' => '35',
                'name' => 'KOTA BLITAR',
            ),
            258 => 
            array (
                'regency_id' => '35.73',
                'province_id' => '35',
                'name' => 'KOTA MALANG',
            ),
            259 => 
            array (
                'regency_id' => '35.74',
                'province_id' => '35',
                'name' => 'KOTA PROBOLINGGO',
            ),
            260 => 
            array (
                'regency_id' => '35.75',
                'province_id' => '35',
                'name' => 'KOTA PASURUAN',
            ),
            261 => 
            array (
                'regency_id' => '35.76',
                'province_id' => '35',
                'name' => 'KOTA MOJOKERTO',
            ),
            262 => 
            array (
                'regency_id' => '35.77',
                'province_id' => '35',
                'name' => 'KOTA MADIUN',
            ),
            263 => 
            array (
                'regency_id' => '35.78',
                'province_id' => '35',
                'name' => 'KOTA SURABAYA',
            ),
            264 => 
            array (
                'regency_id' => '35.79',
                'province_id' => '35',
                'name' => 'KOTA BATU',
            ),
            265 => 
            array (
                'regency_id' => '36.01',
                'province_id' => '36',
                'name' => 'KAB. PANDEGLANG',
            ),
            266 => 
            array (
                'regency_id' => '36.02',
                'province_id' => '36',
                'name' => 'KAB. LEBAK',
            ),
            267 => 
            array (
                'regency_id' => '36.03',
                'province_id' => '36',
                'name' => 'KAB. TANGERANG',
            ),
            268 => 
            array (
                'regency_id' => '36.04',
                'province_id' => '36',
                'name' => 'KAB. SERANG',
            ),
            269 => 
            array (
                'regency_id' => '36.71',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG',
            ),
            270 => 
            array (
                'regency_id' => '36.72',
                'province_id' => '36',
                'name' => 'KOTA CILEGON',
            ),
            271 => 
            array (
                'regency_id' => '36.73',
                'province_id' => '36',
                'name' => 'KOTA SERANG',
            ),
            272 => 
            array (
                'regency_id' => '36.74',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG SELATAN',
            ),
            273 => 
            array (
                'regency_id' => '51.01',
                'province_id' => '51',
                'name' => 'KAB. JEMBRANA',
            ),
            274 => 
            array (
                'regency_id' => '51.02',
                'province_id' => '51',
                'name' => 'KAB. TABANAN',
            ),
            275 => 
            array (
                'regency_id' => '51.03',
                'province_id' => '51',
                'name' => 'KAB. BADUNG',
            ),
            276 => 
            array (
                'regency_id' => '51.04',
                'province_id' => '51',
                'name' => 'KAB. GIANYAR',
            ),
            277 => 
            array (
                'regency_id' => '51.05',
                'province_id' => '51',
                'name' => 'KAB. KLUNGKUNG',
            ),
            278 => 
            array (
                'regency_id' => '51.06',
                'province_id' => '51',
                'name' => 'KAB. BANGLI',
            ),
            279 => 
            array (
                'regency_id' => '51.07',
                'province_id' => '51',
                'name' => 'KAB. KARANGASEM',
            ),
            280 => 
            array (
                'regency_id' => '51.08',
                'province_id' => '51',
                'name' => 'KAB. BULELENG',
            ),
            281 => 
            array (
                'regency_id' => '51.71',
                'province_id' => '51',
                'name' => 'KOTA DENPASAR',
            ),
            282 => 
            array (
                'regency_id' => '52.01',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK BARAT',
            ),
            283 => 
            array (
                'regency_id' => '52.02',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK TENGAH',
            ),
            284 => 
            array (
                'regency_id' => '52.03',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK TIMUR',
            ),
            285 => 
            array (
                'regency_id' => '52.04',
                'province_id' => '52',
                'name' => 'KAB. SUMBAWA',
            ),
            286 => 
            array (
                'regency_id' => '52.05',
                'province_id' => '52',
                'name' => 'KAB. DOMPU',
            ),
            287 => 
            array (
                'regency_id' => '52.06',
                'province_id' => '52',
                'name' => 'KAB. BIMA',
            ),
            288 => 
            array (
                'regency_id' => '52.07',
                'province_id' => '52',
                'name' => 'KAB. SUMBAWA BARAT',
            ),
            289 => 
            array (
                'regency_id' => '52.08',
                'province_id' => '52',
                'name' => 'KAB. LOMBOK UTARA',
            ),
            290 => 
            array (
                'regency_id' => '52.71',
                'province_id' => '52',
                'name' => 'KOTA MATARAM',
            ),
            291 => 
            array (
                'regency_id' => '52.72',
                'province_id' => '52',
                'name' => 'KOTA BIMA',
            ),
            292 => 
            array (
                'regency_id' => '53.01',
                'province_id' => '53',
                'name' => 'KAB. KUPANG',
            ),
            293 => 
            array (
                'regency_id' => '53.02',
                'province_id' => '53',
                'name' => 'KAB TIMOR TENGAH SELATAN',
            ),
            294 => 
            array (
                'regency_id' => '53.03',
                'province_id' => '53',
                'name' => 'KAB. TIMOR TENGAH UTARA',
            ),
            295 => 
            array (
                'regency_id' => '53.04',
                'province_id' => '53',
                'name' => 'KAB. BELU',
            ),
            296 => 
            array (
                'regency_id' => '53.05',
                'province_id' => '53',
                'name' => 'KAB. ALOR',
            ),
            297 => 
            array (
                'regency_id' => '53.06',
                'province_id' => '53',
                'name' => 'KAB. FLORES TIMUR',
            ),
            298 => 
            array (
                'regency_id' => '53.07',
                'province_id' => '53',
                'name' => 'KAB. SIKKA',
            ),
            299 => 
            array (
                'regency_id' => '53.08',
                'province_id' => '53',
                'name' => 'KAB. ENDE',
            ),
            300 => 
            array (
                'regency_id' => '53.09',
                'province_id' => '53',
                'name' => 'KAB. NGADA',
            ),
            301 => 
            array (
                'regency_id' => '53.10',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI',
            ),
            302 => 
            array (
                'regency_id' => '53.11',
                'province_id' => '53',
                'name' => 'KAB. SUMBA TIMUR',
            ),
            303 => 
            array (
                'regency_id' => '53.12',
                'province_id' => '53',
                'name' => 'KAB. SUMBA BARAT',
            ),
            304 => 
            array (
                'regency_id' => '53.13',
                'province_id' => '53',
                'name' => 'KAB. LEMBATA',
            ),
            305 => 
            array (
                'regency_id' => '53.14',
                'province_id' => '53',
                'name' => 'KAB. ROTE NDAO',
            ),
            306 => 
            array (
                'regency_id' => '53.15',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI BARAT',
            ),
            307 => 
            array (
                'regency_id' => '53.16',
                'province_id' => '53',
                'name' => 'KAB. NAGEKEO',
            ),
            308 => 
            array (
                'regency_id' => '53.17',
                'province_id' => '53',
                'name' => 'KAB. SUMBA TENGAH',
            ),
            309 => 
            array (
                'regency_id' => '53.18',
                'province_id' => '53',
                'name' => 'KAB. SUMBA BARAT DAYA',
            ),
            310 => 
            array (
                'regency_id' => '53.19',
                'province_id' => '53',
                'name' => 'KAB. MANGGARAI TIMUR',
            ),
            311 => 
            array (
                'regency_id' => '53.20',
                'province_id' => '53',
                'name' => 'KAB. SABU RAIJUA',
            ),
            312 => 
            array (
                'regency_id' => '53.21',
                'province_id' => '53',
                'name' => 'KAB. MALAKA',
            ),
            313 => 
            array (
                'regency_id' => '53.71',
                'province_id' => '53',
                'name' => 'KOTA KUPANG',
            ),
            314 => 
            array (
                'regency_id' => '61.01',
                'province_id' => '61',
                'name' => 'KAB. SAMBAS',
            ),
            315 => 
            array (
                'regency_id' => '61.02',
                'province_id' => '61',
                'name' => 'KAB. MEMPAWAH',
            ),
            316 => 
            array (
                'regency_id' => '61.03',
                'province_id' => '61',
                'name' => 'KAB. SANGGAU',
            ),
            317 => 
            array (
                'regency_id' => '61.04',
                'province_id' => '61',
                'name' => 'KAB. KETAPANG',
            ),
            318 => 
            array (
                'regency_id' => '61.05',
                'province_id' => '61',
                'name' => 'KAB. SINTANG',
            ),
            319 => 
            array (
                'regency_id' => '61.06',
                'province_id' => '61',
                'name' => 'KAB. KAPUAS HULU',
            ),
            320 => 
            array (
                'regency_id' => '61.07',
                'province_id' => '61',
                'name' => 'KAB. BENGKAYANG',
            ),
            321 => 
            array (
                'regency_id' => '61.08',
                'province_id' => '61',
                'name' => 'KAB. LANDAK',
            ),
            322 => 
            array (
                'regency_id' => '61.09',
                'province_id' => '61',
                'name' => 'KAB. SEKADAU',
            ),
            323 => 
            array (
                'regency_id' => '61.10',
                'province_id' => '61',
                'name' => 'KAB. MELAWI',
            ),
            324 => 
            array (
                'regency_id' => '61.11',
                'province_id' => '61',
                'name' => 'KAB. KAYONG UTARA',
            ),
            325 => 
            array (
                'regency_id' => '61.12',
                'province_id' => '61',
                'name' => 'KAB. KUBU RAYA',
            ),
            326 => 
            array (
                'regency_id' => '61.71',
                'province_id' => '61',
                'name' => 'KOTA PONTIANAK',
            ),
            327 => 
            array (
                'regency_id' => '61.72',
                'province_id' => '61',
                'name' => 'KOTA SINGKAWANG',
            ),
            328 => 
            array (
                'regency_id' => '62.01',
                'province_id' => '62',
                'name' => 'KAB. KOTAWARINGIN BARAT',
            ),
            329 => 
            array (
                'regency_id' => '62.02',
                'province_id' => '62',
                'name' => 'KAB. KOTAWARINGIN TIMUR',
            ),
            330 => 
            array (
                'regency_id' => '62.03',
                'province_id' => '62',
                'name' => 'KAB. KAPUAS',
            ),
            331 => 
            array (
                'regency_id' => '62.04',
                'province_id' => '62',
                'name' => 'KAB. BARITO SELATAN',
            ),
            332 => 
            array (
                'regency_id' => '62.05',
                'province_id' => '62',
                'name' => 'KAB. BARITO UTARA',
            ),
            333 => 
            array (
                'regency_id' => '62.06',
                'province_id' => '62',
                'name' => 'KAB. KATINGAN',
            ),
            334 => 
            array (
                'regency_id' => '62.07',
                'province_id' => '62',
                'name' => 'KAB. SERUYAN',
            ),
            335 => 
            array (
                'regency_id' => '62.08',
                'province_id' => '62',
                'name' => 'KAB. SUKAMARA',
            ),
            336 => 
            array (
                'regency_id' => '62.09',
                'province_id' => '62',
                'name' => 'KAB. LAMANDAU',
            ),
            337 => 
            array (
                'regency_id' => '62.10',
                'province_id' => '62',
                'name' => 'KAB. GUNUNG MAS',
            ),
            338 => 
            array (
                'regency_id' => '62.11',
                'province_id' => '62',
                'name' => 'KAB. PULANG PISAU',
            ),
            339 => 
            array (
                'regency_id' => '62.12',
                'province_id' => '62',
                'name' => 'KAB. MURUNG RAYA',
            ),
            340 => 
            array (
                'regency_id' => '62.13',
                'province_id' => '62',
                'name' => 'KAB. BARITO TIMUR',
            ),
            341 => 
            array (
                'regency_id' => '62.71',
                'province_id' => '62',
                'name' => 'KOTA PALANGKARAYA',
            ),
            342 => 
            array (
                'regency_id' => '63.01',
                'province_id' => '63',
                'name' => 'KAB. TANAH LAUT',
            ),
            343 => 
            array (
                'regency_id' => '63.02',
                'province_id' => '63',
                'name' => 'KAB. KOTABARU',
            ),
            344 => 
            array (
                'regency_id' => '63.03',
                'province_id' => '63',
                'name' => 'KAB. BANJAR',
            ),
            345 => 
            array (
                'regency_id' => '63.04',
                'province_id' => '63',
                'name' => 'KAB. BARITO KUALA',
            ),
            346 => 
            array (
                'regency_id' => '63.05',
                'province_id' => '63',
                'name' => 'KAB. TAPIN',
            ),
            347 => 
            array (
                'regency_id' => '63.06',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI SELATAN',
            ),
            348 => 
            array (
                'regency_id' => '63.07',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI TENGAH',
            ),
            349 => 
            array (
                'regency_id' => '63.08',
                'province_id' => '63',
                'name' => 'KAB. HULU SUNGAI UTARA',
            ),
            350 => 
            array (
                'regency_id' => '63.09',
                'province_id' => '63',
                'name' => 'KAB. TABALONG',
            ),
            351 => 
            array (
                'regency_id' => '63.10',
                'province_id' => '63',
                'name' => 'KAB. TANAH BUMBU',
            ),
            352 => 
            array (
                'regency_id' => '63.11',
                'province_id' => '63',
                'name' => 'KAB. BALANGAN',
            ),
            353 => 
            array (
                'regency_id' => '63.71',
                'province_id' => '63',
                'name' => 'KOTA BANJARMASIN',
            ),
            354 => 
            array (
                'regency_id' => '63.72',
                'province_id' => '63',
                'name' => 'KOTA BANJARBARU',
            ),
            355 => 
            array (
                'regency_id' => '64.01',
                'province_id' => '64',
                'name' => 'KAB. PASER',
            ),
            356 => 
            array (
                'regency_id' => '64.02',
                'province_id' => '64',
                'name' => 'KAB. KUTAI KARTANEGARA',
            ),
            357 => 
            array (
                'regency_id' => '64.03',
                'province_id' => '64',
                'name' => 'KAB. BERAU',
            ),
            358 => 
            array (
                'regency_id' => '64.07',
                'province_id' => '64',
                'name' => 'KAB. KUTAI BARAT',
            ),
            359 => 
            array (
                'regency_id' => '64.08',
                'province_id' => '64',
                'name' => 'KAB. KUTAI TIMUR',
            ),
            360 => 
            array (
                'regency_id' => '64.09',
                'province_id' => '64',
                'name' => 'KAB. PENAJAM PASER UTARA',
            ),
            361 => 
            array (
                'regency_id' => '64.11',
                'province_id' => '64',
                'name' => 'KAB. MAHAKAM ULU',
            ),
            362 => 
            array (
                'regency_id' => '64.71',
                'province_id' => '64',
                'name' => 'KOTA BALIKPAPAN',
            ),
            363 => 
            array (
                'regency_id' => '64.72',
                'province_id' => '64',
                'name' => 'KOTA SAMARINDA',
            ),
            364 => 
            array (
                'regency_id' => '64.74',
                'province_id' => '64',
                'name' => 'KOTA BONTANG',
            ),
            365 => 
            array (
                'regency_id' => '65.01',
                'province_id' => '65',
                'name' => 'KAB. BULUNGAN',
            ),
            366 => 
            array (
                'regency_id' => '65.02',
                'province_id' => '65',
                'name' => 'KAB. MALINAU',
            ),
            367 => 
            array (
                'regency_id' => '65.03',
                'province_id' => '65',
                'name' => 'KAB. NUNUKAN',
            ),
            368 => 
            array (
                'regency_id' => '65.04',
                'province_id' => '65',
                'name' => 'KAB. TANA TIDUNG',
            ),
            369 => 
            array (
                'regency_id' => '65.71',
                'province_id' => '65',
                'name' => 'KOTA TARAKAN',
            ),
            370 => 
            array (
                'regency_id' => '71.01',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW',
            ),
            371 => 
            array (
                'regency_id' => '71.02',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA',
            ),
            372 => 
            array (
                'regency_id' => '71.03',
                'province_id' => '71',
                'name' => 'KAB. KEPULAUAN SANGIHE',
            ),
            373 => 
            array (
                'regency_id' => '71.04',
                'province_id' => '71',
                'name' => 'KAB. KEPULAUAN TALAUD',
            ),
            374 => 
            array (
                'regency_id' => '71.05',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA SELATAN',
            ),
            375 => 
            array (
                'regency_id' => '71.06',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA UTARA',
            ),
            376 => 
            array (
                'regency_id' => '71.07',
                'province_id' => '71',
                'name' => 'KAB. MINAHASA TENGGARA',
            ),
            377 => 
            array (
                'regency_id' => '71.08',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW UTARA',
            ),
            378 => 
            array (
                'regency_id' => '71.09',
                'province_id' => '71',
                'name' => 'KAB. KEP. SIAU TAGULANDANG BIARO',
            ),
            379 => 
            array (
                'regency_id' => '71.10',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW TIMUR',
            ),
            380 => 
            array (
                'regency_id' => '71.11',
                'province_id' => '71',
                'name' => 'KAB. BOLAANG MONGONDOW SELATAN',
            ),
            381 => 
            array (
                'regency_id' => '71.71',
                'province_id' => '71',
                'name' => 'KOTA MANADO',
            ),
            382 => 
            array (
                'regency_id' => '71.72',
                'province_id' => '71',
                'name' => 'KOTA BITUNG',
            ),
            383 => 
            array (
                'regency_id' => '71.73',
                'province_id' => '71',
                'name' => 'KOTA TOMOHON',
            ),
            384 => 
            array (
                'regency_id' => '71.74',
                'province_id' => '71',
                'name' => 'KOTA KOTAMOBAGU',
            ),
            385 => 
            array (
                'regency_id' => '72.01',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI',
            ),
            386 => 
            array (
                'regency_id' => '72.02',
                'province_id' => '72',
                'name' => 'KAB. POSO',
            ),
            387 => 
            array (
                'regency_id' => '72.03',
                'province_id' => '72',
                'name' => 'KAB. DONGGALA',
            ),
            388 => 
            array (
                'regency_id' => '72.04',
                'province_id' => '72',
                'name' => 'KAB. TOLI TOLI',
            ),
            389 => 
            array (
                'regency_id' => '72.05',
                'province_id' => '72',
                'name' => 'KAB. BUOL',
            ),
            390 => 
            array (
                'regency_id' => '72.06',
                'province_id' => '72',
                'name' => 'KAB. MOROWALI',
            ),
            391 => 
            array (
                'regency_id' => '72.07',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI KEPULAUAN',
            ),
            392 => 
            array (
                'regency_id' => '72.08',
                'province_id' => '72',
                'name' => 'KAB. PARIGI MOUTONG',
            ),
            393 => 
            array (
                'regency_id' => '72.09',
                'province_id' => '72',
                'name' => 'KAB. TOJO UNA UNA',
            ),
            394 => 
            array (
                'regency_id' => '72.10',
                'province_id' => '72',
                'name' => 'KAB. SIGI',
            ),
            395 => 
            array (
                'regency_id' => '72.11',
                'province_id' => '72',
                'name' => 'KAB. BANGGAI LAUT',
            ),
            396 => 
            array (
                'regency_id' => '72.12',
                'province_id' => '72',
                'name' => 'KAB. MOROWALI UTARA',
            ),
            397 => 
            array (
                'regency_id' => '72.71',
                'province_id' => '72',
                'name' => 'KOTA PALU',
            ),
            398 => 
            array (
                'regency_id' => '73.01',
                'province_id' => '73',
                'name' => 'KAB. KEPULAUAN SELAYAR',
            ),
            399 => 
            array (
                'regency_id' => '73.02',
                'province_id' => '73',
                'name' => 'KAB. BULUKUMBA',
            ),
            400 => 
            array (
                'regency_id' => '73.03',
                'province_id' => '73',
                'name' => 'KAB. BANTAENG',
            ),
            401 => 
            array (
                'regency_id' => '73.04',
                'province_id' => '73',
                'name' => 'KAB. JENEPONTO',
            ),
            402 => 
            array (
                'regency_id' => '73.05',
                'province_id' => '73',
                'name' => 'KAB. TAKALAR',
            ),
            403 => 
            array (
                'regency_id' => '73.06',
                'province_id' => '73',
                'name' => 'KAB. GOWA',
            ),
            404 => 
            array (
                'regency_id' => '73.07',
                'province_id' => '73',
                'name' => 'KAB. SINJAI',
            ),
            405 => 
            array (
                'regency_id' => '73.08',
                'province_id' => '73',
                'name' => 'KAB. BONE',
            ),
            406 => 
            array (
                'regency_id' => '73.09',
                'province_id' => '73',
                'name' => 'KAB. MAROS',
            ),
            407 => 
            array (
                'regency_id' => '73.10',
                'province_id' => '73',
                'name' => 'KAB. PANGKAJENE KEPULAUAN',
            ),
            408 => 
            array (
                'regency_id' => '73.11',
                'province_id' => '73',
                'name' => 'KAB. BARRU',
            ),
            409 => 
            array (
                'regency_id' => '73.12',
                'province_id' => '73',
                'name' => 'KAB. SOPPENG',
            ),
            410 => 
            array (
                'regency_id' => '73.13',
                'province_id' => '73',
                'name' => 'KAB. WAJO',
            ),
            411 => 
            array (
                'regency_id' => '73.14',
                'province_id' => '73',
                'name' => 'KAB. SIDENRENG RAPPANG',
            ),
            412 => 
            array (
                'regency_id' => '73.15',
                'province_id' => '73',
                'name' => 'KAB. PINRANG',
            ),
            413 => 
            array (
                'regency_id' => '73.16',
                'province_id' => '73',
                'name' => 'KAB. ENREKANG',
            ),
            414 => 
            array (
                'regency_id' => '73.17',
                'province_id' => '73',
                'name' => 'KAB. LUWU',
            ),
            415 => 
            array (
                'regency_id' => '73.18',
                'province_id' => '73',
                'name' => 'KAB. TANA TORAJA',
            ),
            416 => 
            array (
                'regency_id' => '73.22',
                'province_id' => '73',
                'name' => 'KAB. LUWU UTARA',
            ),
            417 => 
            array (
                'regency_id' => '73.24',
                'province_id' => '73',
                'name' => 'KAB. LUWU TIMUR',
            ),
            418 => 
            array (
                'regency_id' => '73.26',
                'province_id' => '73',
                'name' => 'KAB. TORAJA UTARA',
            ),
            419 => 
            array (
                'regency_id' => '73.71',
                'province_id' => '73',
                'name' => 'KOTA MAKASSAR',
            ),
            420 => 
            array (
                'regency_id' => '73.72',
                'province_id' => '73',
                'name' => 'KOTA PARE PARE',
            ),
            421 => 
            array (
                'regency_id' => '73.73',
                'province_id' => '73',
                'name' => 'KOTA PALOPO',
            ),
            422 => 
            array (
                'regency_id' => '74.01',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA',
            ),
            423 => 
            array (
                'regency_id' => '74.02',
                'province_id' => '74',
                'name' => 'KAB. KONAWE',
            ),
            424 => 
            array (
                'regency_id' => '74.03',
                'province_id' => '74',
                'name' => 'KAB. MUNA',
            ),
            425 => 
            array (
                'regency_id' => '74.04',
                'province_id' => '74',
                'name' => 'KAB. BUTON',
            ),
            426 => 
            array (
                'regency_id' => '74.05',
                'province_id' => '74',
                'name' => 'KAB. KONAWE SELATAN',
            ),
            427 => 
            array (
                'regency_id' => '74.06',
                'province_id' => '74',
                'name' => 'KAB. BOMBANA',
            ),
            428 => 
            array (
                'regency_id' => '74.07',
                'province_id' => '74',
                'name' => 'KAB. WAKATOBI',
            ),
            429 => 
            array (
                'regency_id' => '74.08',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA UTARA',
            ),
            430 => 
            array (
                'regency_id' => '74.09',
                'province_id' => '74',
                'name' => 'KAB. KONAWE UTARA',
            ),
            431 => 
            array (
                'regency_id' => '74.10',
                'province_id' => '74',
                'name' => 'KAB. BUTON UTARA',
            ),
            432 => 
            array (
                'regency_id' => '74.11',
                'province_id' => '74',
                'name' => 'KAB. KOLAKA TIMUR',
            ),
            433 => 
            array (
                'regency_id' => '74.12',
                'province_id' => '74',
                'name' => 'KAB. KONAWE KEPULAUAN',
            ),
            434 => 
            array (
                'regency_id' => '74.13',
                'province_id' => '74',
                'name' => 'KAB. MUNA BARAT',
            ),
            435 => 
            array (
                'regency_id' => '74.14',
                'province_id' => '74',
                'name' => 'KAB. BUTON TENGAH',
            ),
            436 => 
            array (
                'regency_id' => '74.15',
                'province_id' => '74',
                'name' => 'KAB. BUTON SELATAN',
            ),
            437 => 
            array (
                'regency_id' => '74.71',
                'province_id' => '74',
                'name' => 'KOTA KENDARI',
            ),
            438 => 
            array (
                'regency_id' => '74.72',
                'province_id' => '74',
                'name' => 'KOTA BAU BAU',
            ),
            439 => 
            array (
                'regency_id' => '75.01',
                'province_id' => '75',
                'name' => 'KAB. GORONTALO',
            ),
            440 => 
            array (
                'regency_id' => '75.02',
                'province_id' => '75',
                'name' => 'KAB. BOALEMO',
            ),
            441 => 
            array (
                'regency_id' => '75.03',
                'province_id' => '75',
                'name' => 'KAB. BONE BOLANGO',
            ),
            442 => 
            array (
                'regency_id' => '75.04',
                'province_id' => '75',
                'name' => 'KAB. PAHUWATO',
            ),
            443 => 
            array (
                'regency_id' => '75.05',
                'province_id' => '75',
                'name' => 'KAB. GORONTALO UTARA',
            ),
            444 => 
            array (
                'regency_id' => '75.71',
                'province_id' => '75',
                'name' => 'KOTA GORONTALO',
            ),
            445 => 
            array (
                'regency_id' => '76.01',
                'province_id' => '76',
                'name' => 'KAB. MAMUJU UTARA',
            ),
            446 => 
            array (
                'regency_id' => '76.02',
                'province_id' => '76',
                'name' => 'KAB. MAMUJU',
            ),
            447 => 
            array (
                'regency_id' => '76.03',
                'province_id' => '76',
                'name' => 'KAB. MAMASA',
            ),
            448 => 
            array (
                'regency_id' => '76.04',
                'province_id' => '76',
                'name' => 'KAB. POLEWALI MANDAR',
            ),
            449 => 
            array (
                'regency_id' => '76.05',
                'province_id' => '76',
                'name' => 'KAB. MAJENE',
            ),
            450 => 
            array (
                'regency_id' => '76.06',
                'province_id' => '76',
                'name' => 'KAB. MAMUJU TENGAH',
            ),
            451 => 
            array (
                'regency_id' => '81.01',
                'province_id' => '81',
                'name' => 'KAB. MALUKU TENGAH',
            ),
            452 => 
            array (
                'regency_id' => '81.02',
                'province_id' => '81',
                'name' => 'KAB. MALUKU TENGGARA',
            ),
            453 => 
            array (
                'regency_id' => '81.03',
                'province_id' => '81',
                'name' => 'KAB. MALUKU TENGGARA BARAT',
            ),
            454 => 
            array (
                'regency_id' => '81.04',
                'province_id' => '81',
                'name' => 'KAB. BURU',
            ),
            455 => 
            array (
                'regency_id' => '81.05',
                'province_id' => '81',
                'name' => 'KAB. SERAM BAGIAN TIMUR',
            ),
            456 => 
            array (
                'regency_id' => '81.06',
                'province_id' => '81',
                'name' => 'KAB. SERAM BAGIAN BARAT',
            ),
            457 => 
            array (
                'regency_id' => '81.07',
                'province_id' => '81',
                'name' => 'KAB. KEPULAUAN ARU',
            ),
            458 => 
            array (
                'regency_id' => '81.08',
                'province_id' => '81',
                'name' => 'KAB. MALUKU BARAT DAYA',
            ),
            459 => 
            array (
                'regency_id' => '81.09',
                'province_id' => '81',
                'name' => 'KAB. BURU SELATAN',
            ),
            460 => 
            array (
                'regency_id' => '81.71',
                'province_id' => '81',
                'name' => 'KOTA AMBON',
            ),
            461 => 
            array (
                'regency_id' => '81.72',
                'province_id' => '81',
                'name' => 'KOTA TUAL',
            ),
            462 => 
            array (
                'regency_id' => '82.01',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA BARAT',
            ),
            463 => 
            array (
                'regency_id' => '82.02',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA TENGAH',
            ),
            464 => 
            array (
                'regency_id' => '82.03',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA UTARA',
            ),
            465 => 
            array (
                'regency_id' => '82.04',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA SELATAN',
            ),
            466 => 
            array (
                'regency_id' => '82.05',
                'province_id' => '82',
                'name' => 'KAB. KEPULAUAN SULA',
            ),
            467 => 
            array (
                'regency_id' => '82.06',
                'province_id' => '82',
                'name' => 'KAB. HALMAHERA TIMUR',
            ),
            468 => 
            array (
                'regency_id' => '82.07',
                'province_id' => '82',
                'name' => 'KAB. PULAU MOROTAI',
            ),
            469 => 
            array (
                'regency_id' => '82.08',
                'province_id' => '82',
                'name' => 'KAB. PULAU TALIABU',
            ),
            470 => 
            array (
                'regency_id' => '82.71',
                'province_id' => '82',
                'name' => 'KOTA TERNATE',
            ),
            471 => 
            array (
                'regency_id' => '82.72',
                'province_id' => '82',
                'name' => 'KOTA TIDORE KEPULAUAN',
            ),
            472 => 
            array (
                'regency_id' => '91.01',
                'province_id' => '91',
                'name' => 'KAB. MERAUKE',
            ),
            473 => 
            array (
                'regency_id' => '91.02',
                'province_id' => '91',
                'name' => 'KAB. JAYAWIJAYA',
            ),
            474 => 
            array (
                'regency_id' => '91.03',
                'province_id' => '91',
                'name' => 'KAB. JAYAPURA',
            ),
            475 => 
            array (
                'regency_id' => '91.04',
                'province_id' => '91',
                'name' => 'KAB. NABIRE',
            ),
            476 => 
            array (
                'regency_id' => '91.05',
                'province_id' => '91',
                'name' => 'KAB. KEPULAUAN YAPEN',
            ),
            477 => 
            array (
                'regency_id' => '91.06',
                'province_id' => '91',
                'name' => 'KAB. BIAK NUMFOR',
            ),
            478 => 
            array (
                'regency_id' => '91.07',
                'province_id' => '91',
                'name' => 'KAB. PUNCAK JAYA',
            ),
            479 => 
            array (
                'regency_id' => '91.08',
                'province_id' => '91',
                'name' => 'KAB. PANIAI',
            ),
            480 => 
            array (
                'regency_id' => '91.09',
                'province_id' => '91',
                'name' => 'KAB. MIMIKA',
            ),
            481 => 
            array (
                'regency_id' => '91.10',
                'province_id' => '91',
                'name' => 'KAB. SARMI',
            ),
            482 => 
            array (
                'regency_id' => '91.11',
                'province_id' => '91',
                'name' => 'KAB. KEEROM',
            ),
            483 => 
            array (
                'regency_id' => '91.12',
                'province_id' => '91',
                'name' => 'KAB. PEGUNUNGAN BINTANG',
            ),
            484 => 
            array (
                'regency_id' => '91.13',
                'province_id' => '91',
                'name' => 'KAB. YAHUKIMO',
            ),
            485 => 
            array (
                'regency_id' => '91.14',
                'province_id' => '91',
                'name' => 'KAB. TOLIKARA',
            ),
            486 => 
            array (
                'regency_id' => '91.15',
                'province_id' => '91',
                'name' => 'KAB. WAROPEN',
            ),
            487 => 
            array (
                'regency_id' => '91.16',
                'province_id' => '91',
                'name' => 'KAB. BOVEN DIGOEL',
            ),
            488 => 
            array (
                'regency_id' => '91.17',
                'province_id' => '91',
                'name' => 'KAB. MAPPI',
            ),
            489 => 
            array (
                'regency_id' => '91.18',
                'province_id' => '91',
                'name' => 'KAB. ASMAT',
            ),
            490 => 
            array (
                'regency_id' => '91.19',
                'province_id' => '91',
                'name' => 'KAB. SUPIORI',
            ),
            491 => 
            array (
                'regency_id' => '91.20',
                'province_id' => '91',
                'name' => 'KAB. MAMBERAMO RAYA',
            ),
            492 => 
            array (
                'regency_id' => '91.21',
                'province_id' => '91',
                'name' => 'KAB. MAMBERAMO TENGAH',
            ),
            493 => 
            array (
                'regency_id' => '91.22',
                'province_id' => '91',
                'name' => 'KAB. YALIMO',
            ),
            494 => 
            array (
                'regency_id' => '91.23',
                'province_id' => '91',
                'name' => 'KAB. LANNY JAYA',
            ),
            495 => 
            array (
                'regency_id' => '91.24',
                'province_id' => '91',
                'name' => 'KAB. NDUGA',
            ),
            496 => 
            array (
                'regency_id' => '91.25',
                'province_id' => '91',
                'name' => 'KAB. PUNCAK',
            ),
            497 => 
            array (
                'regency_id' => '91.26',
                'province_id' => '91',
                'name' => 'KAB. DOGIYAI',
            ),
            498 => 
            array (
                'regency_id' => '91.27',
                'province_id' => '91',
                'name' => 'KAB. INTAN JAYA',
            ),
            499 => 
            array (
                'regency_id' => '91.28',
                'province_id' => '91',
                'name' => 'KAB. DEIYAI',
            ),
        ));
        \DB::table('_regency')->insert(array (
            0 => 
            array (
                'regency_id' => '91.71',
                'province_id' => '91',
                'name' => 'KOTA JAYAPURA',
            ),
            1 => 
            array (
                'regency_id' => '92.01',
                'province_id' => '92',
                'name' => 'KAB. SORONG',
            ),
            2 => 
            array (
                'regency_id' => '92.02',
                'province_id' => '92',
                'name' => 'KAB. MANOKWARI',
            ),
            3 => 
            array (
                'regency_id' => '92.03',
                'province_id' => '92',
                'name' => 'KAB. FAK FAK',
            ),
            4 => 
            array (
                'regency_id' => '92.04',
                'province_id' => '92',
                'name' => 'KAB. SORONG SELATAN',
            ),
            5 => 
            array (
                'regency_id' => '92.05',
                'province_id' => '92',
                'name' => 'KAB. RAJA AMPAT',
            ),
            6 => 
            array (
                'regency_id' => '92.06',
                'province_id' => '92',
                'name' => 'KAB. TELUK BINTUNI',
            ),
            7 => 
            array (
                'regency_id' => '92.07',
                'province_id' => '92',
                'name' => 'KAB. TELUK WONDAMA',
            ),
            8 => 
            array (
                'regency_id' => '92.08',
                'province_id' => '92',
                'name' => 'KAB. KAIMANA',
            ),
            9 => 
            array (
                'regency_id' => '92.09',
                'province_id' => '92',
                'name' => 'KAB. TAMBRAUW',
            ),
            10 => 
            array (
                'regency_id' => '92.10',
                'province_id' => '92',
                'name' => 'KAB. MAYBRAT',
            ),
            11 => 
            array (
                'regency_id' => '92.11',
                'province_id' => '92',
                'name' => 'KAB. MANOKWARI SELATAN',
            ),
            12 => 
            array (
                'regency_id' => '92.12',
                'province_id' => '92',
                'name' => 'KAB. PEGUNUNGAN ARFAK',
            ),
            13 => 
            array (
                'regency_id' => '92.71',
                'province_id' => '92',
                'name' => 'KOTA SORONG',
            ),
        ));
        
        
    }
}