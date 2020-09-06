<?php

use Illuminate\Database\Seeder;

class LatestSectionPropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('section_properties')->delete();
        
        \DB::table('section_properties')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'FEATURED',
                'button' => 'Check All',
                'button_subtitle' => 'No te olvides',
                'display' => '1',
                'back_color' => '#ffffff',
            ),
        ));
        
        
    }
}