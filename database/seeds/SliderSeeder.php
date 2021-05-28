<?php

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'gambar' => 'slider1.jpg',
        ]);
        DB::table('sliders')->insert([
            'gambar' => 'slider2.jpg',
        ]);
        DB::table('sliders')->insert([
            'gambar' => 'slider3.jpg',
        ]);
        DB::table('sliders')->insert([
            'gambar' => 'slider4.jpg',
        ]);
    }
}
