<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSection2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section2s')->delete();
        
        \DB::table('contenido_section2s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'what we offer',
                'display' => '1',
                'back_color' => '#ffffff',
                'desc_link' => '1',
                'icon_style' => '1',
            ),
        ));
        
        
    }
}