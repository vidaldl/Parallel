<?php

use Illuminate\Database\Seeder;

class MigrationToVPSStylesTableSeeder extends Seeder
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
                'primary_color' => NULL,
                'button_primary' => '#1abc9c',
                'button_secondary' => '#E04F00',
                'favicon' => 'content/GRzm4JRp2BN3zAjEf5FXjYU0VBRAsKXhUg38fDkn.png',
                'page_title' => 'Siscop Systems',
                'custom_icon_1' => 'fas fa-user-friends',
                'custom_link_text_1' => 'Teamviewer',
                'custom_link_address_1' => 'https://download.teamviewer.com/full',
                'show_link_1' => 1,
                'custom_icon_2' => 'fas fa-user-graduate',
                'custom_link_text_2' => 'Aula Virtual',
                'custom_link_address_2' => 'https://zoom.us/j/8097886214',
                'show_link_2' => 1,
                'link_mode_1' => 1,
                'link_mode_2' => 1,
            ),
        ));
        
        
    }
}