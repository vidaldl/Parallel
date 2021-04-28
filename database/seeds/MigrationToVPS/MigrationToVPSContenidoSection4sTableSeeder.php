<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection4sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'OTROS SERVICIOS QUE OFRECEMOS',
                'tagline' => '!Mantente al tanto con nosotros!',
                'button' => 'Más Artiículos',
                'link' => '/blog',
                'display' => 1,
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-10 10:35:22',
            ),
        ));
        
        
    }
}