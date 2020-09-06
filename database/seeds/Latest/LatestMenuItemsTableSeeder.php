<?php

use Illuminate\Database\Seeder;

class LatestMenuItemsTableSeeder extends Seeder
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
                'logo' => 'content/menu/z0O9YQAeTlKWY9WaIVMnaFkiOyuI9DpfqiCYxYls.png',
                'item_inicio' => 'Inicio',
            ),
        ));
        
        
    }
}