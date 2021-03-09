<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'state_id' => 7,
            'city_id' => 1,
            'township_id' => 1,
            'postal_code' => '2001',
            'responsable' => 'admin',
            'responsable_phone' => '0000',
            'delivery_route_id' => 1,
            'type' => 'Pickup dirección',
            'address' => 'direccion admin pickup'
        ]);
    }
}
