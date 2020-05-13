<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSection4sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section4s')->delete();
        
        \DB::table('contenido_section4s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Artículos',
                'tagline' => 'Mantente al tanto con nosotros!',
                'button' => 'Más Articulos',
                'link' => NULL,
                'display' => '1',
                'back_color' => '#ffffff',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}