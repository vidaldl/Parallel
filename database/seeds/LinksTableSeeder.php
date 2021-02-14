<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
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
                'id' => '1',
                'image' => 'content/links/weHBVeuXzEQ5bqI646vNhkf95DGaFqzCLDyPD8DJ.png',
                'title' => 'Aduanas',
                'link' => 'https://www.aduanas.gob.do/',
                'deleted_at' => NULL,
                'created_at' => '2019-08-16 16:18:05',
                'updated_at' => '2019-08-16 16:18:05',
            ),
            1 => 
            array (
                'id' => '2',
                'image' => 'content/links/DOmA9K8j6fBf64NY8QgbXcIBAtrOQZUDnIzRtYSL.png',
                'title' => 'DP WORLD Caucedo',
                'link' => 'https://caucedo.com/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'image' => 'content/links/tTIyyk0YHtCXzprnjb4Essh2GU7AsHyBbWX1zwxR.png',
                'title' => 'DGII',
                'link' => '#servichttps://dgii.gov.do/Paginas/inicio.aspxios',
                'deleted_at' => '2019-11-11 17:49:17',
                'created_at' => NULL,
                'updated_at' => '2019-11-11 17:49:17',
            ),
            3 => 
            array (
                'id' => '4',
                'image' => 'content/links/ZycoypoZK3YFWHwsvw2SQNI2ZpKlsIRaC33Kzp5a.png',
                'title' => 'Ministerio de Hacienda',
                'link' => 'https://www.hacienda.gob.do/',
                'deleted_at' => '2019-11-11 18:04:41',
                'created_at' => NULL,
                'updated_at' => '2019-11-11 18:04:41',
            ),
            4 => 
            array (
                'id' => '5',
                'image' => 'content/links/ASgOghdZ3Pp3T5azqaOi3vbrphFsH6gVLuy0yRoR.png',
                'title' => 'Grupo Ramos',
                'link' => 'http://google.com',
                'deleted_at' => '2019-11-11 17:45:38',
                'created_at' => NULL,
                'updated_at' => '2019-11-11 17:45:38',
            ),
            5 => 
            array (
                'id' => '6',
                'image' => 'content/links/1nDoI4MlrycISssVtU7AMMR8ux4StOy0soFgMid8.png',
                'title' => 'Grupo Hidalgo',
                'link' => 'http://ghidalgo.com',
                'deleted_at' => '2019-11-11 17:45:43',
                'created_at' => NULL,
                'updated_at' => '2019-11-11 17:45:43',
            ),
            6 => 
            array (
                'id' => '7',
                'image' => 'content/links/r9joleVbs6LlM432pw29bw3i8mq1DP9EJP3Cepsl.png',
                'title' => 'Dgii',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
                'image' => 'content/links/GskWkCt4CiRZGvX6DYlIOk3m0rntXm7oiKUw9WTb.png',
                'title' => 'Ministerio de Hacienda',
                'link' => 'https://www.hacienda.gob.do/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}