<?php

use Illuminate\Database\Seeder;

class MigrationToVPSCatalogItemsTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Dell OptiPlex 780',
                'img_primaria' => 'content/catalog/mGOjcrzJ6J2h20Vkqxb8TuWb7692pOYy4io7L394.png',
                'img_secundaria' => 'content/catalog/XZWuHmm3VjLRzm1KiJBP9iW43ZFSVNLTic24QTNT.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 350.0,
                'destacado' => 0,
                'destacado_title' => 'Solo 5 Unidades',
                'precio_nuevo' => '350.50',
                'button' => 'Comprarlo ahora',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'http://apps.sistemas-enlinea.com/tienda/blank_add_cart_web',
                'link_code' => 'POD01',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dell Optiplex 990',
                'img_primaria' => 'content/catalog/eUxtrm8Flhnh1FeZcp5RTwo0nu8yR7jQWGU45NbM.png',
                'img_secundaria' => 'content/catalog/t6ErdLpa5xnG6huIaRYNKl9DLJlci4SJ8xqH2jva.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 350.0,
                'destacado' => 0,
                'destacado_title' => '50% de Descuento',
                'precio_nuevo' => '175.00',
                'button' => 'Comprar Ahora',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'http://apps.sistemas-enlinea.com/tienda/blank_add_cart_web',
                'link_code' => 'CAM02',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'HP LaserJet 107',
                'img_primaria' => 'content/catalog/U9Q9al2hLWQXB5b92a8AnxTIPE9xdAsNmxZUNb6p.png',
                'img_secundaria' => 'content/catalog/eLTaL2vWuEb59LDh7LKc5O8fEOeDiSge4RWeQrl6.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 8100.0,
                'destacado' => 0,
                'destacado_title' => 'Solo 10 Unidades',
                'precio_nuevo' => '8000.00',
                'button' => 'Comprar ahora',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'http://apps.sistemas-enlinea.com/tienda/blank_add_cart_web',
                'link_code' => 'XB01',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Monitor Dell 17"',
                'img_primaria' => 'content/catalog/HpSLzUMMvu0O9uw9pZsF5RtUOuPgpc11xNXBYi9S.png',
                'img_secundaria' => 'content/catalog/8lHBhWSwDHlU2hk2k7kYYYNUBAhwlUqCcd4vhjKo.png',
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => 2200.0,
                'destacado' => 0,
                'destacado_title' => 'Cantidad Limitada',
                'precio_nuevo' => '2000.00',
                'button' => 'Comprar Ahora',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'http://apps.sistemas-enlinea.com/tienda/blank_add_cart_web',
                'link_code' => 'PC03',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Accesorios',
                'img_primaria' => 'content/catalog/nQfH4TZy01IFzwNu9TPAKyeJpl5xDv0svTOrhMLe.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => NULL,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => 'Comprar Ahora',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => 'https://apps.sistemas-enlinea.com/tienda/loja/loja.php',
                'link_code' => NULL,
                'deleted_at' => '2020-02-26 20:22:58',
                'created_at' => NULL,
                'updated_at' => '2020-02-26 20:22:58',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'HP LaserJet 107W',
                'img_primaria' => 'content/catalog/90t5jbyBV3H3p2mOrj0MW09VTsy7BkfSxZESzRjy.png',
                'img_secundaria' => NULL,
                'img_btn' => 'Acercar',
                'img_icon' => 'fas fa-search-plus',
                'precio' => NULL,
                'destacado' => 0,
                'destacado_title' => NULL,
                'precio_nuevo' => NULL,
                'button' => 'Más Información',
                'button_icon' => 'fas fa-arrow-right',
                'button_link' => '#',
                'link_code' => NULL,
                'deleted_at' => '2020-03-01 01:16:02',
                'created_at' => NULL,
                'updated_at' => '2020-03-01 01:16:02',
            ),
        ));
        
        
    }
}