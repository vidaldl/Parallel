<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSection1sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section1s')->delete();
        
        \DB::table('contenido_section1s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'logo' => 'content/8KkCc7H8HcSNT4toDGWacdz9el2v7EOwkFiaoNWA.png',
                'background_image' => 'content/hWJJxgPc8jku3NvFt1oumOCzVxiHzgIRYUYU9C2D.png',
                'title' => 'Adcon-Inc',
                'tagline' => 'Advanced Designs & Construction',
                'button' => NULL,
                'link' => '#servicios',
                'display' => '1',
                'carousel' => NULL,
                'style' => '1',
                'title_size' => '60',
                'subtitle_size' => '32',
                'overlay' => '65',
            ),
            1 => 
            array (
                'id' => '3',
                'logo' => 'content/bsEk7TsvCWrjxrUBNuu9RDxbMwMP9Z2eGzH40RRS.png',
                'background_image' => 'content/CxNJaMN8vzL8yDyzAlkjKzbHwuSZtLmZ0kSIWVtD.png',
                'title' => NULL,
                'tagline' => '<p>Frase todavía aún más inspiradora que invite a actuar Carrousel</p>',
                'button' => 'Conoce Nuestros Servicios',
                'link' => 'http://www.google.com',
                'display' => '0',
                'carousel' => '1',
                'style' => '1',
                'title_size' => '60',
                'subtitle_size' => '32',
                'overlay' => '65',
            ),
            2 => 
            array (
                'id' => '4',
                'logo' => 'content/tKmXveChwH32liCqbmms3e3jezIQC8RcMwzAJtTs.png',
                'background_image' => 'content/nLzKwiD3w6VMYBvQtVCbhYkYDMMh9IhpK71BXjRY.png',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.3',
                'tagline' => '<ol><li>Espaguetis</li><li>Macarrones</li></ol><ul><li>Neveras</li><li>Compra y venta</li></ul>',
                'button' => 'Hola',
                'link' => '#infoSlider',
                'display' => '0',
                'carousel' => '1',
                'style' => '1',
                'title_size' => '60',
                'subtitle_size' => '32',
                'overlay' => '65',
            ),
            3 => 
            array (
                'id' => '5',
                'logo' => 'content/xAu9a9tubHHJvZ40ehv4PVUX2yZhvQtGFBTbdVGb.png',
                'background_image' => 'content/HlUY5rG2XsNKBItnVd0D4eszjnxCys9qMXFW2Tlv.png',
                'title' => 'Titulo Opcional',
                'tagline' => '<p>hello is it me you\'re looking for?kk</p><p>HLKLKDLSKDLKSKDLKSLKD<br>Lorem Ipsum Dolor sit amet not rslsl</p><p>vc é engraçado</p><p>ontobul</p>',
                'button' => 'asdasdasd',
                'link' => '#contact',
                'display' => '0',
                'carousel' => '1',
                'style' => '1',
                'title_size' => '60',
                'subtitle_size' => '32',
                'overlay' => '65',
            ),
        ));
        
        
    }
}