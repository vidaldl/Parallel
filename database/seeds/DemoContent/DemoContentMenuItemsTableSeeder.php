<?php

use Illuminate\Database\Seeder;

class DemoContentMenuItemsTableSeeder extends Seeder
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
                'id' => 1,
                'logo' => 'content/menu/qvXnQF7XqxgsYJsWc2JJMNjCrLXncseovtIIhH9R.png',
                'item_inicio' => 'Inicio',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}