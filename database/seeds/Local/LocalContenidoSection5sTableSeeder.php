<?php

use Illuminate\Database\Seeder;

class LocalContenidoSection5sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section5s')->delete();
        
        \DB::table('contenido_section5s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Contáctanos',
                'address' => 'Santo Domingo, República Dominicana',
                'email' => 'VidalDK@TribuKayi.com',
            'number' => '<p><span style="color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 14px;">1(809)-801-7489</span><br></p>',
                'display' => '1',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}