<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // estado carabobo
        DB::table('cities')->insert([
        	'state_id' => '7',
        	'city' => 'Valencia',
        	'delivery_time' => '1 día'
        ]);
        DB::table('cities')->insert([
        	'state_id' => '7',
        	'city' => 'Puerto Cabello',
        	'delivery_time' => '3 días'
        ]);
    }
}
