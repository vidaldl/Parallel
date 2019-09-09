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
                'display' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'section' => 'infoslider1',
                'order' => 2,
                'display' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'section' => 'infoslider2',
                'order' => 3,
                'display' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'section' => 'infoslider3',
                'order' => 1,
                'display' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'section' => 'pricing',
                'order' => 5,
                'display' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'section' => 'articulos',
                'order' => 6,
                'display' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'section' => 'info',
                'order' => 4,
                'display' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'section' => 'contact',
                'order' => 8,
                'display' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'section' => 'links',
                'order' => 9,
                'display' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'section' => 'gallery',
                'order' => 7,
                'display' => 0,
            ),
        ));
        
        
    }
}