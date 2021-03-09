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
        	'township' => 'Casco central',
           'delivery_price' => '3',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Prebo',
          'delivery_price' => '3.5',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Trigal',
          'delivery_price' => '5',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Avenida Bolivar',
          'delivery_price' => '2.6',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Santa rosa',
          'delivery_price' => '6',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'La candelaria',
          'delivery_price' => '6',
        	'coverage' => '0'
        ]);
       
    }
}
