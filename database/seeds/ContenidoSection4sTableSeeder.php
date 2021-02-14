<?php

use Illuminate\Database\Seeder;

class ContenidoSection4sTableSeeder extends Seeder
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
                'link' => '/blog',
                'display' => '1',
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
        ));
        
        
    }
}