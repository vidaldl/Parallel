<?php

use Illuminate\Database\Seeder;

class DemoContentShopItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shop_items')->delete();
        
        \DB::table('shop_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Pulsera',
                'img_primaria' => 'content/shop/Ex4ZeosKKqrbcnYsxWUGQYlCnZsnuSNonLInYvoX.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 1600.0,
                'destacado' => 1,
                'destacado_title' => '%50 de Descuento',
                'precio_nuevo' => '800',
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Collar',
                'img_primaria' => 'content/shop/1bqBfO7kHgLYLJuJltUMOat5m97CVzsSLkWc3svD.png',
                'img_secundaria' => 'content/shop/azoQMpfbBlitJT12kvQsPjqHK0VWRPf3G5ujWGEW.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 2000.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Mochila SlingShot MW-200',
                'img_primaria' => 'content/shop/VvWTdhpi1OsN71AI7PJI4w4z0jadEmsd8eLWM4zA.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 5000.0,
                'destacado' => 1,
                'destacado_title' => '*Oferta',
                'precio_nuevo' => '4500',
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Mochila TravelBank',
                'img_primaria' => 'content/shop/1AFnJlvop30RcGuHadnw45omyoRgNzYOWNUlrvcN.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 3500.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'DSLR Camera 2020',
                'img_primaria' => 'content/shop/XSv8flTU9n79fqW8DS4mmsh5QZhpLfJBLtyjWAVt.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 24999.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Tenis Nike',
                'img_primaria' => 'content/shop/pqeyDGxcOBcKBqAz9LXXZh5FChwNpVscszjRQUPj.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 12000.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Consola Play Station 4',
                'img_primaria' => 'content/shop/tNfwIk6oJCKoX0wgx7DhhYrV9TWehyUQjIlpPBmj.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 15999.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Apple Air Pods',
                'img_primaria' => 'content/shop/tlS9Vu88C9nt115So8c9njlrX1e6L6ScWZSACamZ.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 11000.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
            'title' => 'Apple Setup (Rojo)',
                'img_primaria' => 'content/shop/IAXzxtpdSyL6pP1fN2GlsqqbCKDtZbyma3NPrilo.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 145000.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Essential Oil',
                'img_primaria' => 'content/shop/6MGGeC6lFgfd44pqnxJ2un9GMaiaOTlE3NtcZahk.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 500.0,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => NULL,
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}