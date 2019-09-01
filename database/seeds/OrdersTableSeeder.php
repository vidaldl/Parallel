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


        \DB::table('orders')->delete();

        \DB::table('orders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'section' => 'servicios',
                'order' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'section' => 'infoslider1',
                'order' => 4,
            ),
            2 =>
            array (
                'id' => 3,
                'section' => 'infoslider2',
                'order' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'section' => 'infoslider3',
                'order' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'section' => 'pricing',
                'order' => 3,
            ),
            5 =>
            array (
                'id' => 6,
                'section' => 'articulos',
                'order' => 5,
            ),
            6 =>
            array (
                'id' => 7,
                'section' => 'info',
                'order' => 6,
            ),
            7 =>
            array (
                'id' => 8,
                'section' => 'contact',
                'order' => 7,
            ),
            8 =>
            array (
                'id' => 9,
                'section' => 'links',
                'order' => 8,
            ),
            9 =>
            array (
                'id' => 10,
                'section' => 'gallery',
                'order' => 9,
            ),
        ));


    }
}
