<?php

use Illuminate\Database\Seeder;

class MigrateToVPSGallerySectionsTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Galería',
                'subtitle' => 'Nuestras Actividades',
                'back_color' => '#f8f8f8',
            ),
        ));
        
        
    }
}