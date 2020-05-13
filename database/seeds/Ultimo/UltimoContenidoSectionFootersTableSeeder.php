<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSectionFootersTableSeeder extends Seeder
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
                'copy' => 'Adcon-Inc',
                'logo' => 'content/footer/pva9Ju0yDbD6PczpUFLF9AabDtYc8rkMutTGnejw.png',
                'social_title' => NULL,
                'acerca' => '<p>Adcon es una empresa.....</p>',
                'style' => '1',
                'line' => '0',
                'line_style' => '1',
                'back_color' => '#333',
                'color' => '#CCC',
                'color_sec' => '#999',
            ),
        ));
        
        
    }
}