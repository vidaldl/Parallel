<?php

use Illuminate\Database\Seeder;

class ContenidoSection1sTableSeeder extends Seeder
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
                'id' => 1,
                'logo' => 'content/OXK4awwXNvYymFjt2Vwq9ebOv0y9BfszGkPS5IgI.png',
                'background_image' => 'content/5vxV76fSJk7bOb8YRQEmUJTzhY48RDZNKxgYhCQd.png',
                'title' => 'Grupo Hidalgo & Asociados S.R.L. Estatico',
                'tagline' => '<p>Frase todavía aún más inspiradora que invite a actuar Estatico</p>',
                'button' => 'Conoce Nuestros Servicios',
                'link' => '#infoSlider',
                'display' => 1,
                'carousel' => 1,
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
            ),
            1 => 
            array (
                'id' => 3,
                'logo' => 'content/bsEk7TsvCWrjxrUBNuu9RDxbMwMP9Z2eGzH40RRS.png',
                'background_image' => 'content/CxNJaMN8vzL8yDyzAlkjKzbHwuSZtLmZ0kSIWVtD.png',
                'title' => NULL,
                'tagline' => '<p>Frase todavía aún más inspiradora que invite a actuar Carrousel</p><p>salami</p><p>Frase todavía aún más inspiradora que invite a actuar Carrousel</p><p>Frase todavía aún más inspiradora que invite a actuar Carrousel</p>',
                'button' => 'Conoce Nuestros Servicios',
                'link' => 'http://www.google.com',
                'display' => 0,
                'carousel' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
            ),
            2 => 
            array (
                'id' => 4,
                'logo' => 'content/tKmXveChwH32liCqbmms3e3jezIQC8RcMwzAJtTs.png',
                'background_image' => 'content/nLzKwiD3w6VMYBvQtVCbhYkYDMMh9IhpK71BXjRY.png',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.3',
                'tagline' => '<ol><li>Espaguetis</li><li>Macarrones</li></ol><ul><li>Neveras</li><li>Compra y venta</li></ul>',
                'button' => 'Hola',
                'link' => '#infoSlider',
                'display' => 0,
                'carousel' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
            ),
            3 => 
            array (
                'id' => 5,
                'logo' => 'content/xAu9a9tubHHJvZ40ehv4PVUX2yZhvQtGFBTbdVGb.png',
                'background_image' => 'content/HlUY5rG2XsNKBItnVd0D4eszjnxCys9qMXFW2Tlv.png',
                'title' => 'Titulo Opcional',
                'tagline' => '<p>hello is it me you\'re looking for?kk</p><p>HLKLKDLSKDLKSKDLKSLKD<br>Lorem Ipsum Dolor sit amet not rslsl</p><p>vc é engraçado</p><p>ontobul</p>',
                'button' => 'asdasdasd',
                'link' => '#contact',
                'display' => 0,
                'carousel' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
            ),
        ));
        
        
    }
}