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

        DB::table('orders')->insert(array (
            0 =>
            array (
                'id' => 15,
                'section' => 'catalog2',
                'name' => 'Catalogo 2',
                'order' => 12,
                'display' => 1,
                'line' => 1,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Catalogo 2',
                'menu_display' => 0,
                'edit_link' => 'catalog2',
            ),
            1 =>
            array (
                'id' => 16,
                'section' => 'catalog3',
                'name' => 'Catalogo 3',
                'order' => 13,
                'display' => 1,
                'line' => 1,
                'line_style' => 1,
                'container_style' => 1,
                'menu_name' => 'Catalogo 3',
                'menu_display' => 0,
                'edit_link' => 'catalog3',
            ),
        ));


    }
}
