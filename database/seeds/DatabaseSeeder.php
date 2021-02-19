<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //users
        $this->call(UserSeeder::class);
        $this->call(RoleSeeders::class);
        //Locations
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(TownshipSeeder::class);
        //delivery routes
        $this->call(DeliveryRouteSeeder::class);
        //product variables
        $this->call(IvaSeeder::class);
        $this->call(PackagingSeeder::class);
        //general variables
        $this->call(VariableSeeder::class);
        //Marcas
        $this->call(BrandSeeder::class);
        //status de una orden
        $this->call(StatusOrderSeeder::class);
        
    }
}
