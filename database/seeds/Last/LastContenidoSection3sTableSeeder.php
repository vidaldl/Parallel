<?php

use Illuminate\Database\Seeder;

class LastContenidoSection3sTableSeeder extends Seeder
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
                'link' => 'storage/files/NSjyF2ieE7OnsUWFJqQ1aH3DM5HUoFKHv1DAggou.pdf',
                'link_type' => '1',
            ),
        ));
        
        
    }
}