<?php

use Illuminate\Database\Seeder;

class LocalContenidoSectionFootersTableSeeder extends Seeder
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
                'id' => '1',
                'copy' => 'Parallel Inc.',
                'logo' => 'content/footer/pE0b1nKkokA2MT3fPGNaAVut7jawrkeCOzFwswhZ.png',
                'social_title' => 'Conectate',
                'acerca' => NULL,
                'style' => '2',
                'line' => '2',
                'line_style' => '1',
                'back_color' => '#333',
                'color' => '#CCC',
                'color_sec' => '#999',
            ),
        ));
        
        
    }
}