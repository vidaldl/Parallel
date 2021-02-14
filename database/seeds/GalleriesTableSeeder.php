<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => '1',
                'type' => 'text',
                'slide' => '1',
                'column' => '1',
                'object' => 'Aquí Puedes Subir y Organizar tus Fotos',
                'title' => 'Equipo Parallel',
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ),
        ));
        
        
    }
}