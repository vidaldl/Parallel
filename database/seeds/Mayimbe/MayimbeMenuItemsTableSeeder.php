<?php

use Illuminate\Database\Seeder;

class MayimbeMenuItemsTableSeeder extends Seeder
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
                'logo' => 'content/menu/6JekTYyUDA7B0pCuK7O41rf8YQBIg3EQqhVMY6H4.png',
                'logo_dark' => NULL,
                'item_inicio' => 'Inicio',
                'padding' => NULL,
                'menu_style' => '0',
                'menu_borders' => '0',
                'menu_sticky' => '1',
            ),
        ));
        
        
    }
}