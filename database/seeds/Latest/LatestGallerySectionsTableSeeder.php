<?php

use Illuminate\Database\Seeder;

class LatestGallerySectionsTableSeeder extends Seeder
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
                'title' => 'Servicios',
                'subtitle' => 'Bobinados y Reparaciones de la Mejor Calidad',
                'back_color' => '#f8f8f8',
            ),
        ));
        
        
    }
}