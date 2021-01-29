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
        $this->call(RoleSeeders::class);
        $this->call(UserSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(IvaSeeder::class);
        $this->call(PackagingSeeder::class);
        
    }
}
