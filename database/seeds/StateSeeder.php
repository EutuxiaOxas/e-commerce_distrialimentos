<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StateSeeder extends Seeder
{

    static $states = [
        'Amazonas',
        'Anzoátegui',
        'Apure',
        'Aragua', //4
        'Barinas',
        'Bolívar',
        'Carabobo', //7
        'Cojedes',
        'Delta Amacuro',
        'Distrito Capital', //10
        'Falcón', //11
        'Cojedes',
        'Guárico',
        'Lara',
        'Mérida',
        'Miranda',
        'Monagas',
        'Nueva Esparta',
        'Portuguesa',
        'Sucre',
        'Táchira',
        'Trujillo',
        'Vargas',
        'Yaracuy',
        'Zulia'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (self::$states as $state) {
            DB::table('states')->insert([
                'state' => $state,
                'coverage' => 0
            ]);
        }

    }
}
