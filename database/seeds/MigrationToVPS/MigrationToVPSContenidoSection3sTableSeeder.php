<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection3sTableSeeder extends Seeder
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
                'title' => 'Mini Video-Manuales',
                'contenido' => '<p>Aqui tenemos los videos de las respuestas de los temas más básicos en nuestro sistema. Mediante estos videos, puedes aprender y/o Consultar sobre las operaciones que se ejercen dia a dia en el sistema. Organizadas por categoría y diseñadas para que el usuario pueda entender con facilidad un sistema que ya es sencillo de por si.</p>',
                'button' => '60 PREGUNTAS',
                'background_color' => '#ced2e0',
                'text_color' => '#4e4e4e',
                'link' => NULL,
                'link_type' => 0,
            ),
        ));
        
        
    }
}