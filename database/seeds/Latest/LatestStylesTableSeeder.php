<?php

use Illuminate\Database\Seeder;

class LatestStylesTableSeeder extends Seeder
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
                'id' => '1',
                'primary_color' => NULL,
                'button_primary' => '#cf000e',
                'button_secondary' => '#0acfaa',
                'favicon' => 'content/o4YZPPbSPfxDVf9Zl8Ge6TDCiaRH3DRarj30jf6Q.png',
                'page_title' => 'Bobinados Nacionales',
                'custom_icon_1' => 'fas fa-user',
                'custom_link_text_1' => 'Login',
                'custom_link_address_1' => 'https://apps.sistemas-enlinea.com/registro/login/',
                'show_link_1' => '1',
                'custom_icon_2' => NULL,
                'custom_link_text_2' => 'Clientes',
                'custom_link_address_2' => 'http://www.google.com',
                'show_link_2' => '0',
                'link_mode_1' => '1',
                'link_mode_2' => '1',
            ),
        ));
        
        
    }
}