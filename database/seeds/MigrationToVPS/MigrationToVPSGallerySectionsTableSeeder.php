<?php

use Illuminate\Database\Seeder;

class MigrationToVPSGallerySectionsTableSeeder extends Seeder
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
                'title' => 'Video Manuales del Sistema',
                'subtitle' => 'Soporte Tecnico',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}