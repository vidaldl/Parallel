<?php

use Illuminate\Database\Seeder;

class ContenidoSection2sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Servicios',
                'display' => 1,
                'back_color' => '#ffffff',
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
            ),
        ));
        
        
    }
}