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
                'button_secondary' => '#ff7c00',
                'favicon' => NULL,
                'page_title' => 'la capa 8',
                'custom_icon_1' => 'fas fa-shopping-cart',
                'custom_link_text_1' => 'Carrito',
                'custom_link_address_1' => 'https://apps.sistemas-enlinea.com/tienda/form_cart_web/form_cart_web.php',
                'show_link_1' => 1,
                'custom_icon_2' => NULL,
                'custom_link_text_2' => 'Clientes',
                'custom_link_address_2' => 'http://www.google.com',
                'show_link_2' => 0,
                'link_mode_1' => 1,
                'link_mode_2' => 1,
            ),
        ));
        
        
    }
}