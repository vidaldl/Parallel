<?php

use Illuminate\Database\Seeder;

class ProblemaContenidoSection3sTableSeeder extends Seeder
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
                'title' => 'Our Presentation',
                'contenido' => NULL,
                'button' => 'View',
                'background_color' => '#1e89c9',
                'text_color' => '#EEE',
                'link' => 'storage/files/3s1rSKhPsU3qOJqN6xW7Jww2QhM2yB0xgn8BgOZT.pdf',
                'link_type' => '1',
            ),
        ));
        
        
    }
}