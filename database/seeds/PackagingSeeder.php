<?php

use Illuminate\Database\Seeder;

class PackagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('ivas')->insert([
        'id' => 0,
        'packaging' => 'Bulto'
        ]);
        
        DB::table('ivas')->insert([
            'id' => 1,
            'packaging' => 'Caja'
        ]);

        DB::table('ivas')->insert([
            'id' => 2,
            'packaging' => 'Docena'
            ]);
            


    }
}
