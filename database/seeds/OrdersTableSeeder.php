<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {




        \DB::table('orders')->insert(array (

            0 =>
            array (
                'id' => 14,
                'section' => 'catalog',
                'name' => 'Catalogo',
                'order' => 12,
                'display' => 0,
                'line' => 0,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Catalogo',
                'menu_display' => 1,
                'edit_link' => 'catalog',
            ),
        ));


    }
}
