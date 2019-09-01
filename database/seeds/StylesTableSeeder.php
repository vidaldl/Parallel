<?php

use Illuminate\Database\Seeder;

class StylesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('styles')->delete();
        
        \DB::table('styles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'primary_color' => '#3d4858',
                'button_primary' => '#818c51',
                'button_secondary' => '#cf3a24',
                'page_title' => 'Titulo del Sitio',
                'custom_icon_1' => 'fab fa-acquisitions-incorporated',
                'custom_link_text_1' => 'adsf',
                'custom_link_address_1' => '#infoSlider',
                'show_link_1' => 1,
                'custom_icon_2' => 'fab fa-adn',
                'custom_link_text_2' => 'adsfasdf',
                'custom_link_address_2' => 'http://www.google.com',
                'show_link_2' => 0,
                'created_at' => '2019-07-05 22:13:07',
                'updated_at' => '2019-07-05 22:13:07',
            ),
        ));
        
        
    }
}