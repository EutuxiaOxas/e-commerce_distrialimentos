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
            'name' => 'IBERIA',
            'description' => 'Las mejor marca de todos los tiempo.',
            'banner' => 'marca1.jpg',
            'status' => 'ACTIVA'
        ]);

        DB::table('brands')->insert([
            'name' => 'BADU',
            'description' => 'Las mejor marca de todos los tiempo.',
            'banner' => 'marca2.jpg',
            'status' => 'ACTIVA'
        ]);

        DB::table('brands')->insert([
            'name' => 'CARABOBO',
            'description' => 'Las mejor marca de todos los tiempo.',
            'banner' => 'marca3.jpg',
            'status' => 'ACTIVA'
        ]);
    }
}
