<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection3sTableSeeder extends Seeder
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
                'contenido' => NULL,
                'button' => 'Más',
                'background_color' => '#1ABC9C',
                'text_color' => '#EEE',
                'link' => NULL,
                'link_type' => 0,
            ),
        ));
        
        
    }
}