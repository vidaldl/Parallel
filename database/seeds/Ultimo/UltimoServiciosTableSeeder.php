<?php

use Illuminate\Database\Seeder;

class UltimoServiciosTableSeeder extends Seeder
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
                'id' => '1',
                'icon' => 'far fa-edit',
                'icon_img' => NULL,
                'title' => 'Design',
                'contenido' => 'We show you how it\'s done. What it\'ll cost and how it will turn out.',
                'image' => 'content/servicios/QNRKDma3mg2dTlYQiPPxxjgjA4q9smqfyr6SS5Lw.png',
                'contenido_modal' => '<p>Here we show you how it\'s done!</p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-25 20:42:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'icon' => 'far fa-building',
                'icon_img' => NULL,
                'title' => 'Planning',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => NULL,
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:34:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'icon' => 'fas fa-building',
                'icon_img' => NULL,
                'title' => 'Construction',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => NULL,
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:35:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'icon' => 'fas fa-chalkboard-teacher',
                'icon_img' => NULL,
                'title' => 'Professionalism',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => NULL,
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:35:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => '5',
                'icon' => 'fas fa-route',
                'icon_img' => NULL,
                'title' => 'Compromise',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => NULL,
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:35:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'icon' => 'store',
                'icon_img' => NULL,
                'title' => 'Tienda',
                'contenido' => 'Tienda online para provar klk con klk',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:15:45',
                'updated_at' => '2019-07-17 14:35:07',
                'deleted_at' => '2019-07-17 14:35:07',
            ),
            6 => 
            array (
                'id' => '7',
                'icon' => 'table',
                'icon_img' => NULL,
                'title' => 'Mesas.com',
                'contenido' => 'En los bulto no nos destacamos',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:17:10',
                'updated_at' => '2019-07-05 20:18:00',
                'deleted_at' => '2019-07-05 20:18:00',
            ),
            7 => 
            array (
                'id' => '8',
                'icon' => 'peace',
                'icon_img' => NULL,
                'title' => 'tranquilidad.com',
                'contenido' => 'ontobul',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:17:38',
                'updated_at' => '2019-07-05 20:17:58',
                'deleted_at' => '2019-07-05 20:17:58',
            ),
        ));
        
        
    }
}