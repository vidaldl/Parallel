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
                'section' => 'links',
                'order' => 8,
            ),
        ));


    }
}
