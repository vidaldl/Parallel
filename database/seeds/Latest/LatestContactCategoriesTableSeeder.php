<?php

use Illuminate\Database\Seeder;

class LatestContactCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_categories')->delete();
        
        \DB::table('contact_categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'REPARACIÓN DE BOMBAS DE AGUA',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'EBOBINADO DE MOTORES',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'MANTENIMIENTO PREVENTIVO',
            ),
        ));
        
        
    }
}