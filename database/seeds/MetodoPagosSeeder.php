<?php

use Illuminate\Database\Seeder;

class MetodoPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks_user')->insert([
            'title' => 'Banesco',
            'description' => 'Transferencia en Bolivares',
            'titular' => 'Administrador',
            'number_account' => '010101020310'
        ]);

        DB::table('banks_user')->insert([
            'title' => 'Banco Mercantil',
            'description' => 'Transferencia en Bolivares',
            'titular' => 'Administrador',
            'number_account' => '0101010203102'
        ]);

        DB::table('banks_user')->insert([
            'title' => 'Efectivo',
            'description' => 'Pago en dolares',
            'titular' => 'Administrador',
        ]);

        DB::table('banks_user')->insert([
            'title' => 'Zelle',
            'description' => 'Transferencia en Dolares',
            'titular' => 'Administrador',
            'number_account' => 'juan@gmail.com'
        ]);
    }
}
