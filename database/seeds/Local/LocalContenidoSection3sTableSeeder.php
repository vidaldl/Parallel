<?php

use Illuminate\Database\Seeder;

class LocalContenidoSection3sTableSeeder extends Seeder
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
                'title' => 'Pasos para prospectar...',
                'contenido' => '<p>ASEA Connect</p>',
                'button' => 'Ver...',
                'background_color' => '#009cff',
                'text_color' => '#fcfcfc',
                'link' => 'storage/files/WGtXiDv2aiSZ5bcARmqbDNjFo1GPBTzFnZaNt5Gt.pdf',
                'link_type' => '1',
            ),
        ));
        
        
    }
}