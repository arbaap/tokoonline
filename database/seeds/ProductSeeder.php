<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kelengkapan Camp / Hiking

        DB::table('products')->insert([
            'nama' => 'ALL IN ONE COOKWARE SET',
            'harga' => '550000',
            'outdoor_id' => 1,
            'gambar' => 'equipment.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER MATRAS CACING MAT & COT',
            'harga' => '89000',
            'outdoor_id' => 1,
            'gambar' => 'equipment1.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'STAND STOVE (GHA-6266A)',
            'harga' => '130000',
            'outdoor_id' => 1,
            'gambar' => 'equipment2.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER TREKKING POLE 2 SECTION POLE',
            'harga' => '149000',
            'outdoor_id' => 1,
            'gambar' => 'equipment3.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER HORAGALLES LIGHTING EQUIPMENT',
            'harga' => '129000',
            'outdoor_id' => 1,
            'gambar' => 'equipment4.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER HAZRA KITCHENWARE',
            'harga' => '179000',
            'outdoor_id' => 1,
            'gambar' => 'equipment5.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => '3 IN 1 NESTING COOKING SET',
            'harga' => '220000',
            'outdoor_id' => 1,
            'gambar' => 'equipment6.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER REFLECTIVE ROPE EQUIPMENT',
            'harga' => '49000',
            'outdoor_id' => 1,
            'gambar' => 'equipment7.jpg'
        ]);


        // Pakaian

        DB::table('products')->insert([
            'nama' => 'EIGER J. CLEMENT JACKET',
            'harga' => '599000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER KAHUNA 89 JACKET HOODIE',
            'harga' => '495000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian1.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER J.TRIPLE JACKET MENS',
            'harga' => '659000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian2.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER HEATWAVE INSULATION JACKET',
            'harga' => '829000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian3.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER RAVA SHORTPANTS 89',
            'harga' => '320000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian4.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER FEARLESS PANTS SOFTSHELL',
            'harga' => '725000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian5.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER C.176 RIBSTOP PANTS',
            'harga' => '359000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian6.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER C.RIPS WILDLIFE PANT LS 1.1',
            'harga' => '385000',
            'outdoor_id' => 2,
            'gambar' => 'pakaian7.jpg'
        ]);


        // Sepatu & Tas

        DB::table('products')->insert([
            'nama' => 'EIGER STINGRAY SHOES',
            'harga' => '889000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER CHAMBA SHOES',
            'harga' => '799000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu1.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER S.BOOT POLLOCK SHOES',
            'harga' => '1200000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu2.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER SYNAPCER 1.0 SHOES',
            'harga' => '1049000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu3.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER XAVANTE 1.0 SHOES',
            'harga' => '1150000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu4.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER ANACONDA 2.5 SHOES',
            'harga' => '1100000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu5.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER PYTHON HC BOOTS SHOES',
            'harga' => '1299000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu6.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER PIRANHA SHOES',
            'harga' => '679000',
            'outdoor_id' => 3,
            'gambar' => 'sepatu7.jpg'
        ]);



        DB::table('products')->insert([
            'nama' => 'EIGER WANDERLUST 60 1A BACKPACK',
            'harga' => '1649000',
            'outdoor_id' => 3,
            'gambar' => 'tas.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER Z-EXCELSIOR 75+15L 1F BACKPACK',
            'harga' => '1900000',
            'outdoor_id' => 3,
            'gambar' => 'tas1.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER EQUATOR 45 CARRIER BACKPACK',
            'harga' => '1399000',
            'outdoor_id' => 3,
            'gambar' => 'tas2.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER STREAMLINE 45 (MS) CARRIER',
            'harga' => '759000',
            'outdoor_id' => 3,
            'gambar' => 'tas3.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER HELARCTOS 55 1.0 BACKPACK',
            'harga' => '1049000',
            'outdoor_id' => 3,
            'gambar' => 'tas4.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'OSPREY RENN 50 BACKPACK',
            'harga' => '1799000',
            'outdoor_id' => 3,
            'gambar' => 'tas5.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER STREAMLINE 35 (WS) CARRIER',
            'harga' => '709000',
            'outdoor_id' => 3,
            'gambar' => 'tas6.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER ELIPTIC SOLARIS 55L 2A',
            'harga' => '1249000',
            'outdoor_id' => 3,
            'gambar' => 'tas7.jpg'
        ]);


        // Tenda

        DB::table('products')->insert([
            'nama' => 'EIGER SHIPTON 3P TENTS',
            'harga' => '2000000',
            'outdoor_id' => 4,
            'gambar' => 'tenda.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER RIDGE SINGLE TENTS',
            'harga' => '3250000',
            'outdoor_id' => 4,
            'gambar' => 'tenda1.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'EIGER SHIRA BLUE 1P TENTS',
            'harga' => '1299000',
            'outdoor_id' => 4,
            'gambar' => 'tenda2.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'CONSINA GREEN ECLIPSE 4',
            'harga' => '999000',
            'outdoor_id' => 4,
            'gambar' => 'tenda3.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'CONSINA TENT MAGNUM 4',
            'harga' => '9450000',
            'outdoor_id' => 4,
            'gambar' => 'tenda4.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'CONSINA GALAPAGOS 4',
            'harga' => '2500000',
            'outdoor_id' => 4,
            'gambar' => 'tenda5.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'CONSINA TENT MAGNUM 6',
            'harga' => '1390000',
            'outdoor_id' => 4,
            'gambar' => 'tenda6.jpg'
        ]);
        DB::table('products')->insert([
            'nama' => 'CONSINA TRAILLIGHT 2P',
            'harga' => '990000',
            'outdoor_id' => 4,
            'gambar' => 'tenda7.jpg'
        ]);
    }
}
