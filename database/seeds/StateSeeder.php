<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
        	'state' => 'Amazonas',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Anzoátegui',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Apure',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Barinas',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Bolívar',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Carabobo',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Cojedes',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Delta Amacuro',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Distrito Capital',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Falcón',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Guárico',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Lara',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Mérida',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Miranda',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Monagas',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Nueva Esparta',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Portuguesa',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Sucre',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Táchira',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Trujillo',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Vargas',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Yaracuy',
        	'coverage' => 0
        ]);

        DB::table('states')->insert([
        	'state' => 'Zulia',
        	'coverage' => 0
        ]);
    }
}
