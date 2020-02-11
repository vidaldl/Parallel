<?php

use Illuminate\Database\Seeder;

class CatalogSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('catalog_sections')->delete();
        
        \DB::table('catalog_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Catálogo',
            ),
        ));
        
        
    }
}