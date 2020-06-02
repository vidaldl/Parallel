<?php

use Illuminate\Database\Seeder;

class LatestInfoSliderText2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_text2s')->delete();
        
        \DB::table('info_slider_text2s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Quienes somos',
                'contenido' => '<p>Bobinados Nacionales inicio sus operaciones en el año 2006. desde entonces a la reparación y bobinado de Motores Eléctricos, Bombas de Agua, Generadores Eléctricos y demás equipos maquinarias.&nbsp;</p><p><br></p>',
                'button' => 'Mas aqui',
                'link' => NULL,
                'display_type' => '0',
                'video' => 'videos/A3S3luIHRx1azdEoXpDwmKKddHSMhARvk5wz47a4.mp4',
                'display' => '0',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}