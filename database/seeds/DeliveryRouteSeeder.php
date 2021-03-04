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
        '7:00 AM',
        '8:00 AM',
        '9:00 AM',
        '10:00 AM',
        '11:00 AM',
        '12:00 AM',
        '1:00 PM',
        '2:00 PM',
        '3:00 PM',
        '4:00 PM',
        '5:00 PM',
        '6:00 PM',
        '7:00 PM',
        '8:00 PM',
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
