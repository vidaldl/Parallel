<?php

use Illuminate\Database\Seeder;

class InfoSliderText2sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Más Cosas',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'button' => 'Saludos Mas aqui',
                'link' => NULL,
                'display_type' => 0,
                'video' => NULL,
                'display' => 0,
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}