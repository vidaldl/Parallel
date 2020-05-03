<?php

use Illuminate\Database\Seeder;

class LocalGallerySectionsTableSeeder extends Seeder
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
                'title' => 'Mayo de 2020',
                'subtitle' => 'En este mes leeremos nuevamente el libro Go Pro. Búscalo más arriba!!!',
                'back_color' => '#f8f8f8',
            ),
        ));
        
        
    }
}