<?php

use Illuminate\Database\Seeder;

class LatestCatalogItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_items')->delete();
        
        \DB::table('catalog_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Soplador Lafert',
                'img_primaria' => 'content/catalog/U4e82rtPsZ2izRkbYPWGGhwafyBPWpp5tMVLsHGP.png',
                'img_secundaria' => 'content/catalog/TvWAKkQ1OHVaxcwObLjcHXqKdc0pKwxKhTfOmEOr.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '75000.00',
                'destacado' => '1',
                'destacado_title' => 'Oferta',
                'precio_nuevo' => '68700',
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'http://google.com',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Joyas',
                'img_primaria' => 'content/catalog/936u1ci7l0AbljP3WqUCFp4HxgscK0BCrrLPGlTD.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '350.00',
                'destacado' => '0',
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-04-24 01:15:24',
                'created_at' => NULL,
                'updated_at' => '2020-04-24 01:15:24',
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'Relojes',
                'img_primaria' => 'content/catalog/8Qim2ZhdquZWFEDUxuqpWinspHkAwHyLTFI4EcEj.png',
                'img_secundaria' => 'content/catalog/2f1GQZ28XnOIcU7uGFruVaKCBKb5qszIjEwHCpiS.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '800.00',
                'destacado' => '0',
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-04-24 01:15:30',
                'created_at' => NULL,
                'updated_at' => '2020-04-24 01:15:30',
            ),
            3 => 
            array (
                'id' => '4',
                'title' => 'Tenis',
                'img_primaria' => 'content/catalog/MSdlPEd1ZfzREsZVBhr255dzCZJvq9YNRLguihWD.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '1200.00',
                'destacado' => '1',
                'destacado_title' => '2x1!!',
                'precio_nuevo' => '725.75',
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-04-24 01:15:35',
                'created_at' => NULL,
                'updated_at' => '2020-04-24 01:15:35',
            ),
            4 => 
            array (
                'id' => '5',
                'title' => 'Fotografía y Edición',
                'img_primaria' => 'content/catalog/KWMCMpK8mvGXSFneAG7T1F5bpy656MdKjdFotoKH.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '5000.00',
                'destacado' => '0',
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-04-24 01:15:46',
                'created_at' => NULL,
                'updated_at' => '2020-04-24 01:15:46',
            ),
            5 => 
            array (
                'id' => '6',
                'title' => 'Bobinasa - Bomba de Agua %',
                'img_primaria' => NULL,
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => '1500.00',
                'destacado' => '0',
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => 'Más Información',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'title' => 'Hola',
                'img_primaria' => NULL,
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => NULL,
                'destacado' => '0',
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => 'Más Información',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-06-01 16:33:34',
                'created_at' => NULL,
                'updated_at' => '2020-06-01 16:33:34',
            ),
        ));
        
        
    }
}