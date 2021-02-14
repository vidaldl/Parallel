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
                'id' => '1',
                'title' => 'Servicios que ofrecemos',
                'display' => '1',
                'back_color' => '#ffffff',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
        ));
        
        
    }
}