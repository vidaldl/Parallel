<?php

use Illuminate\Database\Seeder;

class LatestContenidoSection1sTableSeeder extends Seeder
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
                'logo' => 'content/ZUBcc51hKoRWFhSqeB3QM6mbRZQmrjNYzQ4EYk73.png',
                'background_image' => 'content/tZfvHNW78Mu8U6g1w3S5Y49whgrkyKkIxFX0aVwS.png',
                'title' => 'Sistemas en linea',
                'tagline' => '<p>Soluciones profesionales en linea</p>',
                'button' => 'Conoce Más',
                'link' => 'http://www.sistemas-enlinea.com',
                'display' => '1',
                'carousel' => NULL,
                'style' => '2',
                'title_size' => '60',
                'subtitle_size' => '32',
                'overlay' => '25',
            ),
            1 => 
            array (
                'id' => '3',
                'logo' => 'content/bsEk7TsvCWrjxrUBNuu9RDxbMwMP9Z2eGzH40RRS.png',
                'background_image' => 'content/tuX6Z4dP5jnxrMu0BLQUHVTGbnX4eOrI7Ns06WiD.png',
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
                'logo' => 'content/ONEFDTkDQ9oS1abwPoWUnqkjQVecrGcOKS0k4enE.png',
                'background_image' => 'content/uodudbwopWbp9z0MbHf28Xr06Hs1EpZETdBgTv8Y.png',
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