<?php

use Illuminate\Database\Seeder;

class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Ciudad de Valencia 
         DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Valencia',
            'delivery_price' => '3',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'San Diego',
            'delivery_price' => '3.5',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Naguanagua',
            'delivery_price' => '5',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Guacara',
            'delivery_price' => '2.6',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Los Guayos',
            'delivery_price' => '6',
        	'coverage' => '0'
        ]);
       
    }
}
