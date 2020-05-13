<?php

use Illuminate\Database\Seeder;

class UltimoStylesTableSeeder extends Seeder
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
                'button_primary' => NULL,
                'button_secondary' => NULL,
                'favicon' => 'content/nvo3jK49AbcvTKXZMJZQf9p2R9lbDdvKbGysTMpv.png',
                'page_title' => 'ADCON-Inc',
                'custom_icon_1' => 'fas fa-fingerprint',
                'custom_link_text_1' => 'Acceso',
                'custom_link_address_1' => '#servicios',
                'show_link_1' => '0',
                'custom_icon_2' => 'fab fa-adn',
                'custom_link_text_2' => 'adsfasdf',
                'custom_link_address_2' => 'http://www.google.com',
                'show_link_2' => '0',
                'link_mode_1' => '1',
                'link_mode_2' => '1',
            ),
        ));
        
        
    }
}