<?php

use Illuminate\Database\Seeder;

class MigrationToVPSModalsTableSeeder extends Seeder
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
                'id' => 1,
                'content_style' => 1,
                'contenido' => NULL,
                'image' => 'content/modal/0BRFAvSWGRpdJwA94SLmy8vQVuexyZ0WF2KsJpeV.png',
                'button' => NULL,
                'button_sub' => NULL,
                'color' => NULL,
                'button_color_sec' => NULL,
                'link' => NULL,
                'width' => 5,
                'back_color' => NULL,
            ),
        ));
        
        
    }
}