<?php

use Illuminate\Database\Seeder;

class DB_1580525977ContenidoSection1sTableSeeder extends Seeder
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
                'logo' => 'content/TqAo2VEZl709UevET6qB7rJNngEeFNPEkDcvizu1.png',
                'background_image' => 'content/WelqHuIYhtRdGKd9bHTJ07QvXmJz7NhvJJVA870l.png',
                'title' => 'Company Name',
                'tagline' => 'Company Slogan',
                'button' => NULL,
                'link' => '#infoSlider',
                'display' => 0,
                'carousel' => 0,
                'style' => 1,
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
                'overlay' => 65,
            ),
            1 => 
            array (
                'id' => 3,
                'logo' => 'content/bsEk7TsvCWrjxrUBNuu9RDxbMwMP9Z2eGzH40RRS.png',
                'background_image' => 'content/CxNJaMN8vzL8yDyzAlkjKzbHwuSZtLmZ0kSIWVtD.png',
                'title' => 'Titulo Opcional',
                'tagline' => 'Frase o Slogan de la Empresa',
                'button' => 'Conoce Nuestros Servicios',
                'link' => 'http://www.google.com',
                'display' => 0,
                'carousel' => 1,
                'style' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
                'overlay' => 65,
            ),
            2 => 
            array (
                'id' => 4,
                'logo' => 'content/tKmXveChwH32liCqbmms3e3jezIQC8RcMwzAJtTs.png',
                'background_image' => 'content/nLzKwiD3w6VMYBvQtVCbhYkYDMMh9IhpK71BXjRY.png',
                'title' => 'Titulo Opcional',
                'tagline' => 'Frase o Slogan de la Empresa',
                'button' => 'Hola',
                'link' => '#infoSlider',
                'display' => 0,
                'carousel' => 1,
                'style' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
                'overlay' => 65,
            ),
            3 => 
            array (
                'id' => 5,
                'logo' => 'content/xAu9a9tubHHJvZ40ehv4PVUX2yZhvQtGFBTbdVGb.png',
                'background_image' => 'content/HlUY5rG2XsNKBItnVd0D4eszjnxCys9qMXFW2Tlv.png',
                'title' => 'Titulo Opcional',
                'tagline' => 'Más información sobre todo',
                'button' => 'asdasdasd',
                'link' => '#contact',
                'display' => 0,
                'carousel' => 1,
                'style' => 1,
                'created_at' => '2019-07-09 15:00:55',
                'updated_at' => '2019-07-09 15:00:55',
                'overlay' => 65,
            ),
        ));
        
        
    }
}