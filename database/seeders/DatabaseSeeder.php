<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MobilBaru;
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

        MobilBaru::create([
            'nama' => 'COROLLA ALTIS',
            'harga' => '538900000',
            'tipe' => 'NEW COROLLA ALTIS 1.8 V A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1798 cc',
            'kapasitas' => '4',
            'warna' => '#FFFFFF',
        ]);
        MobilBaru::create([
            'nama' => 'VELOZ',
            'harga' => '286000000',
            'tipe' => 'VELOZ 1.5 M/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1496 cc',
            'kapasitas' => '7',
            'warna' => '#A8ABAE',
        ]);
        MobilBaru::create([
            'nama' => 'VELLFIRE',
            'harga' => '1399800000',
            'tipe' => 'VELLFIRE 2.5 G A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2494 cc',
            'kapasitas' => '7',
            'warna' => '#000000',
        ]);
        MobilBaru::create([
            'nama' => 'INNOVA ZENIX',
            'harga' => '419000000',
            'tipe' => 'KIJANG INNOVA ZENIX 2.0 G CVT (PREMIUM COLOR)',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1987 cc',
            'kapasitas' => '7',
            'warna' => '#949494',
        ]);
        MobilBaru::create([
            'nama' => 'FORTUNER 4X2',
            'harga' => '606200000',
            'tipe' => 'FORTUNER 2.8 VRZ 4x2 A/T EURO 4',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2755 cc',
            'kapasitas' => '7',
            'warna' => '#FFFFFF',
        ]);
        MobilBaru::create([
            'nama' => 'CAMRY',
            'harga' => '771300000',
            'tipe' => 'NEW CAMRY 2.5 V A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2494 cc',
            'kapasitas' => '5',
            'warna' => '#1B1B1B',
        ]);
    }
}
