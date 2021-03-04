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
                'background' => '#FF9417',
                'color' => '#000000'
            ]); //1
            DB::table('status_orders')->insert([
                'id' => 2,
                'status' => 'En almacen',
                'msg'=> 'Tu pedido esta siendo procesado...',
                'background' => '#FD6721',

                'color' => '#000000'
            ]); //2
            DB::table('status_orders')->insert([
                'id' => 3,
                'status' => 'Enviado',
                'msg'=> 'El pedido se encuentra en camino...',
                'background' => '#02528A',
                'color' => '#000000'

            ]); //3
            DB::table('status_orders')->insert([
                'id' => 4,
                'status' => 'Completado',
                'msg'=> 'Tu pedido ha sido completado con exito.',
                'background' => '#34A853',
                'color' => '#000000'
            ]); //4
            DB::table('status_orders')->insert([
                'id' => 5,
                'status' => 'Cancelado',
                'msg'=> 'Este pedido ha sido cancelado.',
                'background' => '#EA4335',
                'color' => '#000000'
            ]); //5
    }
}
