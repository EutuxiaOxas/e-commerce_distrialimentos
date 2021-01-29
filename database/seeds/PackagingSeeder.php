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
       DB::table('packagings')->insert([
        'packaging' => 'Bulto'
        ]);
        
        DB::table('packagings')->insert([
            'packaging' => 'Caja'
        ]);

        DB::table('packagings')->insert([
            'packaging' => 'Docena'
            ]);
            


    }
}
