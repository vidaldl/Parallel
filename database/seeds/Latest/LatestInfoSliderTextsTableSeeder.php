<?php

use Illuminate\Database\Seeder;

class LatestInfoSliderTextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_texts')->delete();
        
        \DB::table('info_slider_texts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Nuestros servicios:',
                'contenido' => '<ul><li style="text-align: justify;"><span style="font-size: small;">Suministro de gastables médicos y medicamentos</span></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Venta de hilos de sutura</span><br></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Venta, mantenimiento y reparación de equipos&nbsp;</span></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Diseño de instalaciones sanitarias</span></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Suministro de Instrumental quirúrgico&nbsp;</span></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Venta e instalación de Osteosintesis general</span></li></ul><ul><li style="text-align: justify;"><span style="font-size: small;">Venta e instalación de gases médico</span></li></ul><p><br></p><p><span style="font-size: large;"></span></p>',
                'button' => NULL,
                'link' => NULL,
                'display_type' => '0',
                'video' => 'videos/ZoKjYCwKQ7rhg2LbTTfwTgUSg5ZYHNk8YqoM5tKY.mp4',
                'display' => '1',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}