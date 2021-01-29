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
            'id' => 0,
        	'msg' => 'Excento IVA'
            ]);
        //No excepto de iva
        DB::table('ivas')->insert([
        	'id' => 1,
        	'msg' => 'IVA Incluido'
        ]);
    }
}
