<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContactCategoriesTableSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Software',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Equipos',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Centrales Telefónicas',
            ),
        ));
        
        
    }
}