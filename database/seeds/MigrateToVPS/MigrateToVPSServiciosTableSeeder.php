<?php

use Illuminate\Database\Seeder;

class MigrateToVPSServiciosTableSeeder extends Seeder
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
                'icon' => 'fas fa-car-alt',
                'icon_img' => NULL,
                'title' => 'Logística Aduanera',
                'contenido' => 'akS Dlaishu afjha ajh D: hl h dislu fsldifghizdjbfkshg ousdo',
                'image' => 'content/servicios/y7MbjEP33fcLyc30DPz0bpOM6QakIxJUGQ8QCOMZ.png',
                'contenido_modal' => '<p>&nbsp;uyas kd fsdfa</p><p>dsa asudg fladsdglaglakfglasuhgiuas aiusf jk sdfjkhdf zg</p><p>slkahsf dfagkjjdfsgkj fkjdfz sdfgoijsdfgklsuh akljsf hoisd;fg lo;hfds</p><p>sdfk</p>',
                'created_at' => '2019-07-01 19:12:57',
                'updated_at' => '2019-07-26 00:42:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'icon' => 'fas fa-building',
                'icon_img' => NULL,
                'title' => 'Hotelera',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-01 19:12:57',
                'updated_at' => '2019-07-17 18:34:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'icon' => 'fas fa-ship',
                'icon_img' => NULL,
                'title' => 'Forwarders',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-01 19:12:57',
                'updated_at' => '2019-07-17 18:35:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'icon' => 'fas fa-warehouse',
                'icon_img' => NULL,
                'title' => 'Almacenaje',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-01 19:12:57',
                'updated_at' => '2019-07-17 18:35:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'icon' => 'fas fa-truck-loading',
                'icon_img' => NULL,
                'title' => 'Transporte',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-01 19:12:57',
                'updated_at' => '2019-07-17 18:35:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'icon' => 'store',
                'icon_img' => NULL,
                'title' => 'Tienda',
                'contenido' => 'Tienda online para provar klk con klk',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-06 00:15:45',
                'updated_at' => '2019-07-17 18:35:07',
                'deleted_at' => '2019-07-17 18:35:07',
            ),
            6 => 
            array (
                'id' => 7,
                'icon' => 'table',
                'icon_img' => NULL,
                'title' => 'Mesas.com',
                'contenido' => 'En los bulto no nos destacamos',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-06 00:17:10',
                'updated_at' => '2019-07-06 00:18:00',
                'deleted_at' => '2019-07-06 00:18:00',
            ),
            7 => 
            array (
                'id' => 8,
                'icon' => 'peace',
                'icon_img' => NULL,
                'title' => 'tranquilidad.com',
                'contenido' => 'ontobul',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-06 00:17:38',
                'updated_at' => '2019-07-06 00:17:58',
                'deleted_at' => '2019-07-06 00:17:58',
            ),
        ));
        
        
    }
}