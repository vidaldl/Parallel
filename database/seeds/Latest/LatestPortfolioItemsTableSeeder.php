<?php

use Illuminate\Database\Seeder;

class LatestPortfolioItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_items')->delete();
        
        \DB::table('portfolio_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Granjas',
                'subtitle' => 'Sistema de manejo de produccion para Granjas',
                'logo' => 'content/portfolio/JWPyBHRJh5rJ9Yu2WuioSaJumeoWdfo5qLUZDd8G.png',
                'screenshot' => 'content/portfolio/Wq8S1RhLC9VrjOi36beDaXWi5k2vOwfLYu8ZGufg.png',
                'contenido' => NULL,
                'author' => 'Ing. David R. Vidal',
                'author_bio' => NULL,
                'link_title' => 'Registrarse ahora',
                'button_text' => 'Registrar',
                'button_icon' => 'fas fa-registered',
                'link' => 'https://apps.sistemas-enlinea.com/registro_nuevo/form_registro/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-01-18 18:51:57',
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Sistema de Nomina',
                'subtitle' => 'Sistema de Nomina y Pagos a Personal',
                'logo' => 'content/portfolio/M7nphZQiNaST0KaprxNERriQD74XW6UMnRRLR8B6.png',
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => NULL,
                'button_text' => 'Registro',
                'button_icon' => NULL,
                'link' => 'https://apps.sistemas-enlinea.com/registro_nuevo/form_registro/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'Activos Fijos',
                'subtitle' => 'Sistema de manejo de Activos Fijos',
                'logo' => 'content/portfolio/R7cFEOjUK1LTdyAHoU99Wbq4dfInrKo3TjqHmKEL.png',
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => 'Registrate aqui',
                'button_text' => 'Registrarse',
                'button_icon' => NULL,
                'link' => 'https://apps.sistemas-enlinea.com/registro_nuevo/form_registro/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'title' => 'Manejo de Ordenes de Producción',
                'subtitle' => 'Sistema de Manejo para talleres y reparaciones',
                'logo' => 'content/portfolio/pV41KoxzSKwDDpDoWx4uvb3vnDTdbPVOUT5jRevj.png',
                'screenshot' => NULL,
                'contenido' => NULL,
                'author' => NULL,
                'author_bio' => NULL,
                'link_title' => 'Registrese',
                'button_text' => 'Registrarse',
                'button_icon' => 'fas fa-address-book',
                'link' => 'https://sistemas.en-linea.app/registro_nuevo/form_registro/',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}