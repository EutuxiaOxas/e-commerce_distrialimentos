<?php

use Illuminate\Database\Seeder;

class StatusOrderSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('status_orders')->insert([
                'id' => 1,
                'status' => 'Por pagar',
                'msg'=> 'Realice el pago los mas pronto posible...',
                'background' => '#fff',
                'color' => '#000'
            ]); //1
            DB::table('status_orders')->insert([
                'id' => 2,
                'status' => 'En almacen',
                'msg'=> 'Tu pedido esta siendo procesado...',
                'background' => '#fff',

                'color' => '#000'
            ]); //2
            DB::table('status_orders')->insert([
                'id' => 3,
                'status' => 'Enviado',
                'msg'=> 'El pedido se encuentra en camino...',
                'background' => '#fff',
                'color' => '#000'

            ]); //3
            DB::table('status_orders')->insert([
                'id' => 4,
                'status' => 'Completado',
                'msg'=> 'Tu pedido ha sido completado con exito.',
                'background' => '#fff',
                'color' => '#000'
            ]); //4
            DB::table('status_orders')->insert([
                'id' => 5,
                'status' => 'Cancelado',
                'msg'=> 'Este pedido ha sido cancelado.',
                'background' => '#fff',
                'color' => '#000'
            ]); //5
    }
}
