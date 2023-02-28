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
            'merk' => 'Toyota',
            'harga' => '538900000',
            'tipe' => 'NEW COROLLA ALTIS 1.8 V A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1798 cc',
            'kapasitas' => '4',
            'warna' => '#FFFFFF',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2022-02/1_super%20white.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/ALTIS/exterior_360/white/images/all-new-corolla-altis-01.png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/ALTIS/exterior_360/white/images/all-new-corolla-altis-05.png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/ALTIS/exterior_360/white/images/all-new-corolla-altis-10.png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/ALTIS/exterior_360/white/images/all-new-corolla-altis-15.png',
        ]);
        MobilBaru::create([
            'nama' => 'VELOZ',
            'merk' => 'Toyota',
            'harga' => '286000000',
            'tipe' => 'VELOZ 1.5 M/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1496 cc',
            'kapasitas' => '7',
            'warna' => '#A8ABAE',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2021-11/2-veloz-silver-mica-metallic.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELOZ-Q/exterior_360/Veloz_Silver/veloz-q-silver-(1)_optimized.png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELOZ-Q/exterior_360/Veloz_Silver/veloz-q-silver-(19)_optimized.png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELOZ-Q/exterior_360/Veloz_Silver/veloz-q-silver-(13)_optimized.png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELOZ-Q/exterior_360/Veloz_Silver/veloz-q-silver-(7)_optimized.png',
        ]);
        MobilBaru::create([
            'nama' => 'VELLFIRE',
            'merk' => 'Toyota',
            'harga' => '1399800000',
            'tipe' => 'VELLFIRE 2.5 G A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2494 cc',
            'kapasitas' => '7',
            'warna' => '#000000',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2021-06/vellfire-2021-colors-black.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELLFIRE/exterior_360/black/images/new-vellfire-1.png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELLFIRE/exterior_360/black/images/new-vellfire-5.png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELLFIRE/exterior_360/black/images/new-vellfire-10.png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/VELLFIRE/exterior_360/black/images/new-vellfire-14.png',
        ]);
        MobilBaru::create([
            'nama' => 'INNOVA ZENIX',
            'merk' => 'Toyota',
            'harga' => '419000000',
            'tipe' => 'KIJANG INNOVA ZENIX 2.0 G CVT (PREMIUM COLOR)',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '1987 cc',
            'kapasitas' => '7',
            'warna' => '#949494',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2022-11/1-Platinum-White-Pearl.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/Toyota_Innova_Zenix_2022/exterior_360/Silver-Metallic/Silver_metallic_Q360_Exterior(1).png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/Toyota_Innova_Zenix_2022/exterior_360/Silver-Metallic/Silver_metallic_Q360_Exterior(19).png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/Toyota_Innova_Zenix_2022/exterior_360/Silver-Metallic/Silver_metallic_Q360_Exterior(13).png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/Toyota_Innova_Zenix_2022/exterior_360/Silver-Metallic/Silver_metallic_Q360_Exterior(7).png',
        ]);
        MobilBaru::create([
            'nama' => 'FORTUNER 4X2',
            'merk' => 'Toyota',
            'harga' => '606200000',
            'tipe' => 'FORTUNER 2.8 VRZ 4x2 A/T EURO 4',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2755 cc',
            'kapasitas' => '7',
            'warna' => '#FFFFFF',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2022-08/1%20fortuner%20gr%202022%20platinum%20white%20pearl%20-%20attitude%20black.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/FORTUNER_GR/exterior_360/Fortuner_White/fortuner_super-white-1_optimized.png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/FORTUNER_GR/exterior_360/Fortuner_White/fortuner_super-white-6_optimized.png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/FORTUNER_GR/exterior_360/Fortuner_White/fortuner_super-white-10_optimized.png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/FORTUNER_GR/exterior_360/Fortuner_White/fortuner_super-white-14_optimized.png',
        ]);
        MobilBaru::create([
            'nama' => 'CAMRY',
            'merk' => 'Toyota',
            'harga' => '771300000',
            'tipe' => 'NEW CAMRY 2.5 V A/T',
            'transmisi' => 'Otomatis',
            'bahan_bakar' => 'Bensin',
            'mesin' => '2494 cc',
            'kapasitas' => '5',
            'warna' => '#B1B6C3',
            'gambar_display' => 'https://www.toyota.astra.co.id/sites/default/files/2021-11/02_platinum-white-pearl_0.png',
            'gambar_depan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/CAMRY/exterior_360/white_pearl_mica/images/all-new-camry-01.png',
            'gambar_kiri' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/CAMRY/exterior_360/white_pearl_mica/images/all-new-camry-05.png',
            'gambar_belakang' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/CAMRY/exterior_360/white_pearl_mica/images/all-new-camry-10.png',
            'gambar_kanan' => 'https://tsoimageprod.azureedge.net/static-content/prod/360degview/CAMRY/exterior_360/white_pearl_mica/images/all-new-camry-15.png',
        ]);
    }
}
