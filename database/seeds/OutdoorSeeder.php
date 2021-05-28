<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutdoorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outdoors')->insert([
            'nama' => 'Equipment',
            'jenis' => 'Equipment',
            'gambar' => 'equipment.jpg',
        ]);

        DB::table('outdoors')->insert([
            'nama' => 'Pakaian',
            'jenis' => 'Baju & Celana',
            'gambar' => 'bajucelana.jpg',
        ]);

        DB::table('outdoors')->insert([
            'nama' => 'Hiking',
            'jenis' => 'Tas & Carrier',
            'gambar' => 'hiking.jpg',
        ]);

        DB::table('outdoors')->insert([
            'nama' => 'Camping',
            'jenis' => 'Tenda',
            'gambar' => 'tenda.jpg',
        ]);
    }
}
