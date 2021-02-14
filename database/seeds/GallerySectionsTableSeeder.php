<?php

use Illuminate\Database\Seeder;

class GallerySectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_sections')->delete();
        
        \DB::table('gallery_sections')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Galería',
                'subtitle' => 'Nuestros Eventos',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}