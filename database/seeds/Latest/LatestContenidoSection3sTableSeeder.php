<?php

use Illuminate\Database\Seeder;

class LatestContenidoSection3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section3s')->delete();
        
        \DB::table('contenido_section3s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Conoce mas sobre nosotros',
                'contenido' => '<p>Conoce mas sobre nosotros</p>',
                'button' => 'Conoce Todas Las Funciones',

            ),
        ));
        
        
    }
}