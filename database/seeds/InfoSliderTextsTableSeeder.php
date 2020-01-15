<?php

use Illuminate\Database\Seeder;

class InfoSliderTextsTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Hola',
                'contenido' => 'ME Lorem ipLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'button' => 'Más',
                'link' => NULL,
                'display_type' => 0,
                'video' => NULL,
                'display' => 1,
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}