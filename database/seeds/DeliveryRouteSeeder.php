<?php

use Illuminate\Database\Seeder;

class DeliveryRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    static $routes = [
        'Lunes, 6:00 AM',
        'Martes, 10:00 AM',
        'Miercoles, 7:00 AM',
        'Jueves, 6:00 PM',
    ];
    
    public function run()
    {
        foreach (self::$routes as $r) {
            DB::table('delivery_routes')->insert([
                'name' => $r,
            ]);
        }
    }
}
