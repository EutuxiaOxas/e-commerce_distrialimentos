<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'brand' => 'IBERIA',
            'banner' => 'marca1.jpg',
            'status' => 'ACTIVA'
        ]);

        DB::table('brands')->insert([
            'brand' => 'BADU',
            'banner' => 'marca2.jpg',
            'status' => 'ACTIVA'
        ]);

        DB::table('brands')->insert([
            'brand' => 'CARABOBO',
            'banner' => 'marca3.jpg',
            'status' => 'ACTIVA'
        ]);
    }
}
