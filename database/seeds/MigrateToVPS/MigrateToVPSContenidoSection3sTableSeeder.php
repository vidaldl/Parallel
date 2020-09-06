<?php

use Illuminate\Database\Seeder;

class MigrateToVPSContenidoSection3sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Conoce mas sobre nosotros',
                'contenido' => '<p>Conoce mas sobre nosotros</p>',
                'button' => 'Conoce Todas Las Funciones',
                'background_color' => '#1ABC9C',
                'text_color' => '#EEE',
                'link' => NULL,
                'link_type' => 0,
            ),
        ));
        
        
    }
}