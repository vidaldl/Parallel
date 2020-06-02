<?php

use Illuminate\Database\Seeder;

class LatestOrdersTableSeeder extends Seeder
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
                'id' => '1',
                'section' => 'servicios',
                'name' => 'Servicios',
                'order' => '0',
                'display' => '1',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Lo que Ofrecemos',
                'menu_display' => '0',
                'edit_link' => 'editsection2/1',
            ),
            1 => 
            array (
                'id' => '2',
                'section' => 'infoslider1',
                'name' => 'Slider 1',
                'order' => '6',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Sliders',
                'menu_display' => '0',
                'edit_link' => 'editInfoSlider/1',
            ),
            2 => 
            array (
                'id' => '3',
                'section' => 'infoslider2',
                'name' => 'Slider 2',
                'order' => '1',
                'display' => '1',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Slider',
                'menu_display' => '0',
                'edit_link' => 'editInfoSlider2/1',
            ),
            3 => 
            array (
                'id' => '4',
                'section' => 'infoslider3',
                'name' => 'Slider 3',
                'order' => '4',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Slider',
                'menu_display' => '0',
                'edit_link' => 'editInfoSlider3/1',
            ),
            4 => 
            array (
                'id' => '5',
                'section' => 'pricing',
                'name' => 'Precios',
                'order' => '2',
                'display' => '1',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Precios',
                'menu_display' => '1',
                'edit_link' => 'pricing',
            ),
            5 => 
            array (
                'id' => '6',
                'section' => 'articulos',
                'name' => 'Artículos',
                'order' => '3',
                'display' => '0',
                'line' => '0',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Articulos',
                'menu_display' => '1',
                'edit_link' => 'Test',
            ),
            6 => 
            array (
                'id' => '7',
                'section' => 'info',
                'name' => 'Acción',
                'order' => '5',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Info',
                'menu_display' => '0',
                'edit_link' => 'editsection3/1',
            ),
            7 => 
            array (
                'id' => '8',
                'section' => 'contact',
                'name' => 'Contacto',
                'order' => '14',
                'display' => '1',
                'line' => '1',
                'line_style' => '2',
                'container_style' => '1',
                'menu_name' => 'Contacto',
                'menu_display' => '1',
                'edit_link' => 'editsection5/1',
            ),
            8 => 
            array (
                'id' => '9',
                'section' => 'links',
                'name' => 'Enlaces Útiles',
                'order' => '9',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Enlaces',
                'menu_display' => '0',
                'edit_link' => 'editlink/1',
            ),
            9 => 
            array (
                'id' => '10',
                'section' => 'portfolio-gallery',
                'name' => 'Galeria',
                'order' => '12',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Galería',
                'menu_display' => '1',
                'edit_link' => 'portfolioGallerySection/1',
            ),
            10 => 
            array (
                'id' => '12',
                'section' => 'frase',
                'name' => 'Frase Titulo',
                'order' => '7',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Más',
                'menu_display' => '0',
                'edit_link' => 'frase/1',
            ),
            11 => 
            array (
                'id' => '13',
                'section' => 'portfolio-programs',
                'name' => 'Portfolio',
                'order' => '8',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Portafolio',
                'menu_display' => '0',
                'edit_link' => 'portfolioItems',
            ),
            12 => 
            array (
                'id' => '14',
                'section' => 'catalog',
                'name' => 'Catalogo',
                'order' => '10',
                'display' => '0',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Catalogo',
                'menu_display' => '1',
                'edit_link' => 'catalog',
            ),
            13 => 
            array (
                'id' => '15',
                'section' => 'catalog2',
                'name' => 'Catalogo 2',
                'order' => '11',
                'display' => '0',
                'line' => '0',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Catalogo 2',
                'menu_display' => '0',
                'edit_link' => 'catalog2',
            ),
            14 => 
            array (
                'id' => '16',
                'section' => 'catalog3',
                'name' => 'Catalogo 3',
                'order' => '13',
                'display' => '0',
                'line' => '1',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Catalogo 3',
                'menu_display' => '0',
                'edit_link' => 'catalog3',
            ),
            15 => 
            array (
                'id' => '19',
                'section' => 'text',
                'name' => 'Text',
                'order' => '15',
                'display' => '0',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Text',
                'menu_display' => '0',
                'edit_link' => 'text',
            ),
            16 => 
            array (
                'id' => '20',
                'section' => 'text2',
                'name' => 'Text2',
                'order' => '16',
                'display' => '0',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Text2',
                'menu_display' => '0',
                'edit_link' => 'text2',
            ),
            17 => 
            array (
                'id' => '21',
                'section' => 'text3',
                'name' => 'Text3',
                'order' => '17',
                'display' => '0',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Text3',
                'menu_display' => '0',
                'edit_link' => 'text3',
            ),
            18 => 
            array (
                'id' => '22',
                'section' => 'text4',
                'name' => 'Text4',
                'order' => '18',
                'display' => '0',
                'line' => '2',
                'line_style' => '1',
                'container_style' => '1',
                'menu_name' => 'Text4',
                'menu_display' => '0',
                'edit_link' => 'text4',
            ),
        ));
        
        
    }
}