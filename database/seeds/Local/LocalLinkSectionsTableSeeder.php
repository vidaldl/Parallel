<?php

use Illuminate\Database\Seeder;

class LocalLinkSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('link_sections')->delete();
        
        \DB::table('link_sections')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Eventos',
                'back_color' => '#dadada',
                'display' => '1',
            ),
        ));
        
        
    }
}