<?php

use Illuminate\Database\Seeder;

class DemoContentContenidoSectionFootersTableSeeder extends Seeder
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
                'copy' => 'Parallel Inc.',
                'logo' => 'content/footer/C7mS3XONiL8C889DjZ8725mWgqt0jIVD9hOvDjZW.png',
                'social_title' => NULL,
                'acerca' => NULL,
                'style' => 1,
                'line' => 2,
                'line_style' => 1,
            ),
        ));
        
        
    }
}