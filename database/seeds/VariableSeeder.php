<?php

use Illuminate\Database\Seeder;

class VariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variables')->insert([
            'name' => 'IVA',
            'value' => 16,
        ]);

        DB::table('variables')->insert([
            'name' => 'DOLAR',
            'value' => 1800000,
        ]);
    }
}
