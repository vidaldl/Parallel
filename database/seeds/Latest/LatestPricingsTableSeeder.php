<?php

use Illuminate\Database\Seeder;

class LatestPricingsTableSeeder extends Seeder
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
                'image' => 'content/pricing/96SmS60UZBR4FbdRBNwJ98mL8ZMOeebvHFqMKLzV.png',
                'title' => 'Desglose',
                'price' => '100',
                'recurrence' => 'RD$',
                'button' => 'Hello',
                'link' => NULL,
                'display' => '1',
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            1 => 
            array (
                'id' => '2',
                'image' => 'content/pricing/xpv8XM9XPrJRoipCujWrqWW7QbP66b9qv1YA6Pgc.png',
                'title' => 'SMALL TEAM',
                'price' => '250',
                'recurrence' => 'RD$',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '1',
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            2 => 
            array (
                'id' => '4',
                'image' => 'content/pricing/g4RELDeVcv3FhuI6wJQQ0Kcd6E2ukGU9jqfArORa.png',
                'title' => 'Hello',
                'price' => '500',
                'recurrence' => 'RD$',
                'button' => 'No',
                'link' => NULL,
                'display' => '0',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '6',
                'image' => 'content/pricing/g58D2YlEq87Y5XhCUJmhfd2GbQ3gYwVuvv2JoKq4.png',
                'title' => 'Tabla 4',
                'price' => '1000',
                'recurrence' => 'RD$',
                'button' => 'no',
                'link' => NULL,
                'display' => '0',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '7',
                'image' => 'content/pricing/haChUpUdc8cUMePmj7ATOQNMlIYZ38J5BvEE9o3e.png',
                'title' => 'Tabla 5',
                'price' => '250',
                'recurrence' => 'RD$',
                'button' => 's',
                'link' => NULL,
                'display' => '0',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '8',
                'image' => 'content/pricing/ojVKRq439FJN0EajvJeFe2MzD6cNT80foMdt4Jav.png',
                'title' => 'Tabla 6',
                'price' => '2500',
                'recurrence' => 'RD$',
                'button' => 'd',
                'link' => NULL,
                'display' => '0',
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}