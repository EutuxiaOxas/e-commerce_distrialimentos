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
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Prebo',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Trigal',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Avenida Bolivar',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Santa rosa',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'La candelaria',
        	'coverage' => '0'
        ]);
       
    }
}
