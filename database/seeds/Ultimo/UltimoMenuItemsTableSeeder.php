<?php

use Illuminate\Database\Seeder;

class UltimoMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'logo' => 'content/menu/oGvVsdUqBWl5PNzPvzNewjfyK1OzZp9mOD4mdIra.png',
                'logo_dark' => NULL,
                'item_inicio' => 'Home',
                'padding' => NULL,
                'menu_style' => '0',
                'menu_borders' => '0',
                'menu_sticky' => '1',
            ),
        ));
        
        
    }
}