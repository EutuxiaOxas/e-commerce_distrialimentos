<?php

use Illuminate\Database\Seeder;

class IvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //excepto de iva
        DB::table('ivas')->insert([
            'msg' => 'Excento IVA',
            'value' => false,
            ]);
        //No excepto de iva
        DB::table('ivas')->insert([
            'msg' => 'IVA Incluido',
            'value' => true,
        ]);
    }
}
