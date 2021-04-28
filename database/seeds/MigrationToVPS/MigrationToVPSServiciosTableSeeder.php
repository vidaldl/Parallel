<?php

use Illuminate\Database\Seeder;

class MigrationToVPSServiciosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('servicios')->delete();
        
        \DB::table('servicios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon' => 'fas fa-chalkboard-teacher',
                'icon_img' => 'content/servicios/icons/NfcLSM3MuvsR7a7mMaKFlTBBwyQI7VOZn2xvQYXt.png',
                'title' => 'Software',
                'contenido' => 'Siscop Full, Siscop Lite y Punto de venta. Estamos homologados para el uso de impresoras fiscales. También diseñamos software a la medida.',
                'image' => NULL,
                'contenido_modal' => NULL,
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-08-08 20:45:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'icon' => 'fas fa-desktop',
                'icon_img' => 'content/servicios/icons/pHbUihKCFcspSZiSwFg6RAw27raNZmeZmdakg8W8.png',
                'title' => 'Equipos',
                'contenido' => 'Podemos proveer servidores Pre-configurados para el uso de nuestro sistema. así también como terminales y computadores de escritorio. Impresoras fiscales marca Bixolon.',
                'image' => NULL,
                'contenido_modal' => NULL,
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-08-08 20:44:52',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'icon' => NULL,
                'icon_img' => 'content/servicios/icons/7I6GVVMKfg58Hprl3YQshUuJ7tjmPg6kOOwNZRPn.png',
                'title' => 'Centrales tefefónicas',
                'contenido' => 'Siscopsystems provee servicio de instalación de centrales telefónicas Asterisk, así como la implementación de sistemas de comunicación entre sucursales.',
                'image' => 'content/servicios/kdH6UGcV2UjYuz3gjO0npv8pyDbCHo4iCzPad8IY.png',
                'contenido_modal' => '<p>prueba</p>',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-08-08 19:58:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'icon' => 'warehouse',
                'icon_img' => NULL,
                'title' => 'Almacenaje',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => NULL,
                'contenido_modal' => NULL,
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-16 00:23:38',
                'deleted_at' => '2019-07-16 00:23:38',
            ),
            4 => 
            array (
                'id' => 5,
                'icon' => 'truck-loading',
                'icon_img' => NULL,
                'title' => 'Transporte',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => NULL,
                'contenido_modal' => NULL,
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-16 00:23:35',
                'deleted_at' => '2019-07-16 00:23:35',
            ),
            5 => 
            array (
                'id' => 6,
                'icon' => 'fas fa-address-card',
                'icon_img' => NULL,
                'title' => 'Conoce mas',
                'contenido' => NULL,
                'image' => NULL,
                'contenido_modal' => NULL,
                'created_at' => '2019-08-05 23:15:46',
                'updated_at' => '2019-08-05 23:16:28',
                'deleted_at' => '2019-08-05 23:16:28',
            ),
        ));
        
        
    }
}