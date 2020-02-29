<?php

use Illuminate\Database\Seeder;

class DemoContentCatalogSectionsTableSeeder extends Seeder
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
                'title_link' => NULL,
                'button_primary' => '#EEE',
                'button_secondary' => '#F9F9F9',
                'button_text_color' => '#333',
            ),
        ));
        
        
    }
}