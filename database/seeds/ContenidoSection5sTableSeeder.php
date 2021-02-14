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
                'id' => '1',
                'title' => 'Contáctanos',
                'address' => 'Plaza Monáco Local 214, Autopista San Isidro, Santo Domingo Este',
                'email' => 'info@ghidalgo.com',
            'number' => '+1(809)7662116',
                'display' => '1',
                'back_color' => '#F7F7F7',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
        ));
        
        
    }
}