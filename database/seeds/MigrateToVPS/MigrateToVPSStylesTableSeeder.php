<?php

use Illuminate\Database\Seeder;

class MigrateToVPSStylesTableSeeder extends Seeder
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
                'button_primary' => NULL,
                'button_secondary' => NULL,
                'favicon' => NULL,
                'page_title' => 'En Línea by siscop',
                'custom_icon_1' => NULL,
                'custom_link_text_1' => 'Log In',
                'custom_link_address_1' => 'https://apps.sistemas-enlinea.com/registro/',
                'show_link_1' => 1,
                'custom_icon_2' => NULL,
                'custom_link_text_2' => 'Registro',
                'custom_link_address_2' => 'https://apps.sistemas-enlinea.com/registro_nuevo/form_registro/',
                'show_link_2' => 1,
                'link_mode_1' => 2,
                'link_mode_2' => 2,
            ),
        ));
        
        
    }
}