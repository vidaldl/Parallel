<?php

use Illuminate\Database\Seeder;

class LatestContenidoSectionFootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section_footers')->delete();
        
        \DB::table('contenido_section_footers')->insert(array (
            0 => 
            array (
                'id' => '1',
                'copy' => 'Sistemas en Linea,LLC',


            ),
        ));
        
        
    }
}