<?php

use Illuminate\Database\Seeder;

class DB_1580525977ContenidoSection5sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Contáctanos',
                'address' => 'Calle Republica Dominicana Santo Domingo, Rep Dom 535022',
                'email' => 'info@ejemplo.com',
            'number' => '<p><span style="color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 14px;">1(809)-123-4567<br></span><span style="color: rgb(85, 85, 85); font-family: Lato, sans-serif; font-size: 14px;">1(809)-123-4567&nbsp;</span></p>',
                'display' => 1,
                'back_color' => '#f7f7f7',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}