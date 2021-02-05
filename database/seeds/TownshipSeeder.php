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
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'San Diego',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Naguanagua',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Guacara',
        	'coverage' => '0'
        ]);
        DB::table('townships')->insert([
        	'city_id' => '1',
        	'township' => 'Los Guayos',
        	'coverage' => '0'
        ]);
       
    }
}
