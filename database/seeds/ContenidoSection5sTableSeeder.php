<?php

use Illuminate\Database\Seeder;

class ContenidoSection5sTableSeeder extends Seeder
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
            'number' => '+1(809)-123-4567',
                'display' => 1,
                'back_color' => '#f7f7f7',
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
            ),
        ));
        
        
    }
}