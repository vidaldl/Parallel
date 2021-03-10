<?php

use Illuminate\Database\Seeder;

class TextSectionStylesTableSeeder extends Seeder
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
                'button_primary' => '#1e89c9',
                'button_secondary' => '#23365a',
                'favicon' => NULL,
                'page_title' => 'Caribbean Equipment Medical',
                'custom_icon_1' => NULL,
                'custom_link_text_1' => 'Registro',
                'custom_link_address_1' => '#servicios',
                'show_link_1' => '0',
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