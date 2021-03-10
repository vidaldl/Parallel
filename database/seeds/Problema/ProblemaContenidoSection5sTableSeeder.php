<?php

use Illuminate\Database\Seeder;

class ProblemaContenidoSection5sTableSeeder extends Seeder
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
                'address' => 'Calle Olof Palme,Santo Domingo, Rep Dom 10134',
                'email' => 'info@caribbeanemedical.com',
            'number' => '<p><span style="color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 14px;">1(829)-544-6100<br></span><br></p>',
                'display' => '1',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}