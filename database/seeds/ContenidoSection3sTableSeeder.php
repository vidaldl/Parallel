<?php

use Illuminate\Database\Seeder;

class ContenidoSection3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section3s')->delete();
        
        \DB::table('contenido_section3s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Acerca de Nosotros',
                'contenido' => '<p>Grupo HIDALGO &amp; ASOCIADOS, nace en el año 1995 como resultado de la colaboración y concentración de destacados profesionales del Sector, en la REPUBLICA DOMINICANA y ESPAÑA, que inician una alianza en torno a un nuevo proyecto común, de una empresa dinámica y de servicios, amparada por nuevos conceptos empresariales.</p>',
                'button' => 'Más Sobre Nosotros',
                'display' => '1',
                'created_at' => '2019-07-03 03:42:12',
                'updated_at' => '2019-07-03 03:42:12',
            ),
        ));
        
        
    }
}