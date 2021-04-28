<?php

use Illuminate\Database\Seeder;

class MigrationToVPSLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'content/links/FGXhetGa04z4nOMCSPHOqcbXHuG1BH7KuOxXY1HG.png',
                'title' => 'Comuniquese con nostros haciendo click aqui',
                'link' => 'http://whereby.com/siscopsystems',
                'deleted_at' => NULL,
                'created_at' => '2019-08-16 20:18:05',
                'updated_at' => '2019-08-16 20:18:05',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'content/links/k7BJSpzfjAoz44NoD3kZtatzxZpFrpmZ33d0CUaq.png',
                'title' => 'Visita Nuestra Aula de Entrenamientos Virtuales',
                'link' => 'https://zoom.us/s/8097886214',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'content/links/tTIyyk0YHtCXzprnjb4Essh2GU7AsHyBbWX1zwxR.png',
                'title' => 'Impuestos Internos',
                'link' => '#servicios',
                'deleted_at' => '2019-09-03 23:03:08',
                'created_at' => NULL,
                'updated_at' => '2019-09-03 23:03:08',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'content/links/S6SoBwozlOzSgthxF9IGlCplEBlCTAqF1DqGg1VX.png',
                'title' => 'Super Tucano International',
                'link' => 'google.com',
                'deleted_at' => '2019-09-03 23:03:04',
                'created_at' => NULL,
                'updated_at' => '2019-09-03 23:03:04',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => 'content/links/ASgOghdZ3Pp3T5azqaOi3vbrphFsH6gVLuy0yRoR.png',
                'title' => 'Grupo Ramos',
                'link' => 'http://google.com',
                'deleted_at' => '2019-09-03 23:03:00',
                'created_at' => NULL,
                'updated_at' => '2019-09-03 23:03:00',
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'content/links/1nDoI4MlrycISssVtU7AMMR8ux4StOy0soFgMid8.png',
                'title' => 'Grupo Hidalgo',
                'link' => 'http://ghidalgo.com',
                'deleted_at' => '2019-09-03 23:02:58',
                'created_at' => NULL,
                'updated_at' => '2019-09-03 23:02:58',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => 'content/links/QpT1tREd1FCjqVzDAPLs63s3a4LeH6OaqCjXwl1C.png',
                'title' => 'Visita nuestro canal de YouTube',
                'link' => 'https://www.youtube.com/results?search_query=siscopsystems',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'image' => 'content/links/1Qz3RlOpY28nFVHB4jmlLd7ygHMoMZTt0SCu4LSk.png',
                'title' => 'Visitanos en FaceBook',
                'link' => 'https://www.facebook.com/Siscopsystems-SRL-1574955569474950/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'image' => 'content/links/QIRvwR01ybWWa7ylmyzl2tMllKJTiCGaxdi2zboR.png',
                'title' => 'Agenda de Entrenamientos',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'image' => 'content/links/TSfzv14M1fnowLTytIMbPqLc9ounBkQ0DigyAlgI.png',
                'title' => 'Oportunidades de Empleo',
                'link' => 'http://empleos.siscopsystems.com/grid_Empleado/',
                'deleted_at' => '2020-02-14 18:13:17',
                'created_at' => NULL,
                'updated_at' => '2020-02-14 18:13:17',
            ),
        ));
        
        
    }
}