<?php

use Illuminate\Database\Seeder;

class PricingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricings')->delete();
        
        \DB::table('pricings')->insert(array (
            0 => 
            array (
                'id' => '1',
                'image' => 'content/price1.png',
                'title' => 'PERSONAL',
                'item1' => 'CUSTOM DOMAINS',
                'item2' => 'SLEEPS AFTER 30 MINS OF INACTIVITY',
                'item3' => NULL,
                'item4' => NULL,
                'item5' => NULL,
                'item6' => NULL,
                'price' => 'FREE',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '0',
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-25 18:10:21',
                'updated_at' => '2019-07-25 18:10:21',
            ),
            1 => 
            array (
                'id' => '2',
                'image' => 'content/price2.png',
                'title' => 'SMALL TEAM',
                'item1' => 'NEVER SLEEPS',
                'item2' => 'MULTIPLE WORKERS FOR MORE POWERFUL APPS',
                'item3' => NULL,
                'item4' => NULL,
                'item5' => NULL,
                'item6' => NULL,
                'price' => '$150',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '1',
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-25 18:10:21',
                'updated_at' => '2019-07-25 18:10:21',
            ),
            2 => 
            array (
                'id' => '3',
                'image' => 'content/price3.png',
                'title' => 'ENTERPRISE',
                'item1' => 'DEDICATED',
                'item2' => 'SIMPLE HORIZONTAL SCALABILITY',
                'item3' => NULL,
                'item4' => NULL,
                'item5' => NULL,
                'item6' => NULL,
                'price' => '$400',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '1',
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-25 18:10:21',
                'updated_at' => '2019-07-25 18:10:21',
            ),
        ));
        
        
    }
}