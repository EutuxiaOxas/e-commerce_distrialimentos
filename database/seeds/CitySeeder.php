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
            'id' => 1,
        	'state_id' => '7',
        	'city' => 'Valencia',
        	'delivery_time' => '1 día',
        	'delivery_price' => 3.00
        ]);
        DB::table('cities')->insert([
            'id' => 2,
        	'state_id' => '7',
        	'city' => 'Naguanagua',
        	'delivery_time' => '3 días',
        	'delivery_price' => 3.00

        ]);
        DB::table('cities')->insert([
            'id' => 3,
        	'state_id' => '7',
        	'city' => 'San Diego',
        	'delivery_time' => '3 días',
        	'delivery_price' => 3.00

        ]);
        DB::table('cities')->insert([
            'id' => 4,
        	'state_id' => '7',
        	'city' => 'Puerto Cabello',
        	'delivery_time' => '3 días',
        	'delivery_price' => 3.00

        ]);
        DB::table('cities')->insert([
            'id' => 5,
        	'state_id' => '4',
        	'city' => 'Maracay',
        	'delivery_time' => '3 días',
        	'delivery_price' => 3.00

        ]);
    }
}
