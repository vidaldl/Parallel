<?php

use Illuminate\Database\Seeder;

class MigrationToVPSGalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => 'text',
                'slide' => 1,
                'column' => 1,
                'object' => 'Aquí puedes ver los video Manuales del sistema. Por medio de este modulo, el cliente puede Autoentrenarse para sacarle el maximo al su sistema.',
                'title' => '- Equipo Parallel',
                'created_at' => '2019-09-01 04:00:00',
                'updated_at' => '2019-09-01 04:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'type' => 'video',
                'slide' => 1,
                'column' => 1,
                'object' => 'https://youtu.be/NzcHiYDaF38',
                'title' => 'Introducción',
                'created_at' => '2019-09-02 04:57:20',
                'updated_at' => '2019-09-02 04:57:20',
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'video',
                'slide' => 1,
                'column' => 2,
                'object' => 'https://youtu.be/N3sFxhKf4Bc',
                'title' => 'Pedidos y facturacion',
                'created_at' => '2019-09-03 01:17:10',
                'updated_at' => '2019-09-03 01:17:10',
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'video',
                'slide' => 1,
                'column' => 2,
                'object' => 'https://youtu.be/LBJacuA9B3g',
                'title' => 'Clientes y listado de precios.',
                'created_at' => '2019-09-03 01:18:53',
                'updated_at' => '2019-09-03 01:18:53',
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'video',
                'slide' => 1,
                'column' => 2,
                'object' => 'https://youtu.be/q1WcAQgw7_8',
                'title' => 'Inventario.',
                'created_at' => '2019-09-03 01:20:35',
                'updated_at' => '2019-09-03 01:20:35',
            ),
            5 => 
            array (
                'id' => 14,
                'type' => 'text',
                'slide' => 2,
                'column' => 1,
                'object' => 'Compras y cuentas por cobrar',
                'title' => 'Compras y cuentas por cobrar',
                'created_at' => '2019-10-30 01:36:47',
                'updated_at' => '2019-10-30 01:36:47',
            ),
            6 => 
            array (
                'id' => 15,
                'type' => 'text',
                'slide' => 2,
                'column' => 1,
                'object' => 'Contabilidad',
                'title' => 'Sistema de contabilidad en línea',
                'created_at' => '2019-10-30 01:37:21',
                'updated_at' => '2019-10-30 01:37:21',
            ),
            7 => 
            array (
                'id' => 16,
                'type' => 'video',
                'slide' => 2,
                'column' => 2,
                'object' => 'https://youtu.be/-4TDQ0PLcfw',
                'title' => 'Compras y cuentas por cobrar',
                'created_at' => '2019-10-30 01:39:08',
                'updated_at' => '2019-10-30 01:39:08',
            ),
            8 => 
            array (
                'id' => 17,
                'type' => 'video',
                'slide' => 2,
                'column' => 2,
                'object' => 'https://youtu.be/gjwPWggfJ5s',
                'title' => 'Contabilidad',
                'created_at' => '2019-10-30 01:39:54',
                'updated_at' => '2019-10-30 01:39:54',
            ),
        ));
        
        
    }
}