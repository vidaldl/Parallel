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
                'section' => 'servicios',
                'order' => 0,
            ),
            1 =>
            array (
                'section' => 'infoslider1',
                'order' => 1,
            ),
            2 =>
            array (
                'section' => 'infoslider2',
                'order' => 2,
            ),
            3 =>
            array (
                'section' => 'infoslider3',
                'order' => 3,
            ),
            4 =>
            array (
                'section' => 'pricing',
                'order' => 4,
            ),
            5 =>
            array (
                'section' => 'articulos',
                'order' => 5,
            ),
            6 =>
            array (
                'section' => 'info',
                'order' => 6,
            ),
            7 =>
            array (
                'section' => 'contact',
                'order' => 7,
            ),
        ));


    }
}
