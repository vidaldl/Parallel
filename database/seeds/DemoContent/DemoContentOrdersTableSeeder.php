<?php

use Illuminate\Database\Seeder;

class DemoContentOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'section' => 'servicios',
                'name' => 'Servicios',
                'order' => 0,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Servicios',
                'menu_display' => 1,
                'edit_link' => 'editsection2/1',
            ),
            1 => 
            array (
                'id' => 2,
                'section' => 'infoslider1',
                'name' => 'Slider 1',
                'order' => 7,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Sliders',
                'menu_display' => 0,
                'edit_link' => 'editInfoSlider/1',
            ),
            2 => 
            array (
                'id' => 3,
                'section' => 'infoslider2',
                'name' => 'Slider 2',
                'order' => 2,
                'display' => 1,
                'line' => 0,
                'line_style' => 2,
                'container_style' => 1,
                'menu_name' => 'Slider',
                'menu_display' => 0,
                'edit_link' => 'editInfoSlider2/1',
            ),
            3 => 
            array (
                'id' => 4,
                'section' => 'infoslider3',
                'name' => 'Slider 3',
                'order' => 5,
                'display' => 1,
                'line' => 0,
                'line_style' => 2,
                'container_style' => 1,
                'menu_name' => 'Slider',
                'menu_display' => 0,
                'edit_link' => 'editInfoSlider3/1',
            ),
            4 => 
            array (
                'id' => 5,
                'section' => 'pricing',
                'name' => 'Precios',
                'order' => 1,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Precios',
                'menu_display' => 1,
                'edit_link' => 'pricing',
            ),
            5 => 
            array (
                'id' => 6,
                'section' => 'articulos',
                'name' => 'Artículos',
                'order' => 3,
                'display' => 0,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Articulos',
                'menu_display' => 1,
                'edit_link' => 'Test',
            ),
            6 => 
            array (
                'id' => 7,
                'section' => 'info',
                'name' => 'Acción',
                'order' => 6,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Info',
                'menu_display' => 0,
                'edit_link' => 'editsection3/1',
            ),
            7 => 
            array (
                'id' => 8,
                'section' => 'contact',
                'name' => 'Contacto',
                'order' => 11,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Contacto',
                'menu_display' => 1,
                'edit_link' => 'editsection5/1',
            ),
            8 => 
            array (
                'id' => 9,
                'section' => 'links',
                'name' => 'Enlaces Útiles',
                'order' => 10,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Enlaces',
                'menu_display' => 0,
                'edit_link' => 'editlink/1',
            ),
            9 => 
            array (
                'id' => 10,
                'section' => 'portfolio-gallery',
                'name' => 'Galeria',
                'order' => 4,
                'display' => 1,
                'line' => 0,
                'line_style' => 2,
                'container_style' => 1,
                'menu_name' => 'Galería',
                'menu_display' => 1,
                'edit_link' => 'portfolioGallerySectionUpdate/1',
            ),
            10 => 
            array (
                'id' => 12,
                'section' => 'frase',
                'name' => 'Frase Titulo',
                'order' => 8,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Más',
                'menu_display' => 0,
                'edit_link' => 'frase/1',
            ),
            11 => 
            array (
                'id' => 13,
                'section' => 'portfolio-programs',
                'name' => 'Portfolio',
                'order' => 9,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Portafolio',
                'menu_display' => 0,
                'edit_link' => 'portfolioItems',
            ),
            12 => 
            array (
                'id' => 14,
                'section' => 'catalog',
                'name' => 'Catalogo',
                'order' => 12,
                'display' => 1,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Catalogo',
                'menu_display' => 1,
                'edit_link' => 'catalog',
            ),
        ));
        
        
    }
}