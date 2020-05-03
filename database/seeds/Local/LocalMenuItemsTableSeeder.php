<?php

use Illuminate\Database\Seeder;

class LocalMenuItemsTableSeeder extends Seeder
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
                'logo' => 'content/menu/kqLKoR18b8lHQlEjggzRjGEHJM8fEmjqnLPwPDfn.png',
                'logo_dark' => 'content/menu/f2DbJWr7i2TgWWEM6U1F8WAuGJydrW5PWbHUvF56.png',
                'item_inicio' => 'Inicio',
                'padding' => '120',
                'menu_style' => '0',
                'menu_borders' => '0',
                'menu_sticky' => '1',
            ),
        ));
        
        
    }
}