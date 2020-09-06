<?php

use Illuminate\Database\Seeder;

class MigrateToVPSContenidoSectionFootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section_footers')->delete();
        
        \DB::table('contenido_section_footers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'copy' => 'Sistemas en Linea,LLC',
                'logo' => NULL,
                'social_title' => NULL,
                'acerca' => NULL,
                'style' => 1,
                'line' => 0,
                'line_style' => 1,
                'back_color' => '#333',
                'color' => '#CCC',
                'color_sec' => '#999',
            ),
        ));
        
        
    }
}