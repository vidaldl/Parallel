<?php

use Illuminate\Database\Seeder;

class UltimoGallerySectionsTableSeeder extends Seeder
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
                'title' => 'Our Work',
                'subtitle' => 'A taste of what we\'ve made',
                'back_color' => '#f8f8f8',
            ),
        ));
        
        
    }
}