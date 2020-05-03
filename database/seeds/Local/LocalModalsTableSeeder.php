<?php

use Illuminate\Database\Seeder;

class LocalModalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modals')->delete();
        
        \DB::table('modals')->insert(array (
            0 => 
            array (
                'id' => '1',
                'content_style' => '0',
            'contenido' => '<p style="text-align: center; font-size: 48px;">¿Qué son las moléculas de señalización Redox?&nbsp;</p><p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/eiS6RcsbzXk?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<span style="background-color: rgb(221, 217, 195);"><br></span></p>',
                'image' => NULL,
                'button' => 'Cerrar para seguir explorando',
                'button_sub' => NULL,
                'color' => '#fff',
                'button_color_sec' => '#AB350F',
                'link' => NULL,
                'width' => '6',
                'back_color' => '#FFF',
            ),
        ));
        
        
    }
}