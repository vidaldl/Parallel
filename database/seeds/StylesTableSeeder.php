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
                'id' => '1',
                'primary_color' => '#3c4858',
                'button_primary' => '#818c51',
                'button_secondary' => '#cf3a24',
                'page_title' => 'Grupo Hidalgo',
                'custom_icon_1' => 'fas fa-user',
                'custom_link_text_1' => 'Clientes',
                'custom_link_address_1' => 'http://app.ghidalgo.com',
                'show_link_1' => '1',
                'custom_icon_2' => 'fas fa-building',
                'custom_link_text_2' => 'Administracíon',
                'custom_link_address_2' => 'http://app.ghidalgo.com',
                'show_link_2' => '1',
                'created_at' => '2019-07-10 03:04:49',
                'updated_at' => '2019-07-10 03:04:49',
            ),
        ));
        
        
    }
}