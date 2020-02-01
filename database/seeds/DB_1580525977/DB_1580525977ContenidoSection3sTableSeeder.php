<?php

use Illuminate\Database\Seeder;

class DB_1580525977ContenidoSection3sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Conoce mas sobre nosotros',
                'contenido' => '<p>Conoce mas sobre nosotros</p>',
                'button' => 'Conoce Todas Las Funciones',
                'display' => 1,
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
            ),
        ));
        
        
    }
}