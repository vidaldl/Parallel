<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection5sTableSeeder extends Seeder
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
                'success' => 'success',
                'errors' => 'error',
                'map' => 1,
                'map_iframe' => NULL,
                'info' => NULL,
                'back_color' => '#E5E5E5',
                'back_form' => '#1ABC9C',
                'name' => 'Name',
                'email' => 'Email',
                'phone' => 'Phone',
                'services' => 'Services',
                'subject' => 'Subject',
                'message' => 'Message',
                'send_button' => 'Send Message',
            ),
        ));
        
        
    }
}