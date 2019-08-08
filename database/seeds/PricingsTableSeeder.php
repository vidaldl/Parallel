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
                'id' => 1,
                'image' => 'content/pricing/Xj4BC71rUyLwGvyB8VxX8xixCAINkHFeKE78u0iB.png',
                'title' => 'Desglose',
                'item1' => 'Caja de nuevo',
                'item2' => 'SLEEPS AFTER 30 MINS OF INACTIVITY',
                'item3' => 'Caja',
                'item4' => 'Hello',
                'item5' => 'Lorem',
                'item6' => '',
                'price' => '$100',
                'button' => NULL,
                'link' => NULL,
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'content/pricing/sCN6UqivMhHHiJLDJELs9Q3qTKYBCadf0pg72RPy.png',
                'title' => 'SMALL TEAM',
                'item1' => 'NEVER SLEEPS',
                'item2' => 'MULTIPLE WORKERS FOR MORE POWERFUL APPS',
                'item3' => 'Calamardo',
                'item4' => 'Comidinto',
                'item5' => 'Lorem',
                'item6' => 'Ipsum',
                'price' => '$250',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'content/pricing/YN0TpcHQPhRZxgdExgq4giv9DfoSAWglMQqculEm.png',
                'title' => 'ENTERPRISE',
                'item1' => 'DEDICATED',
                'item2' => 'SIMPLE HORIZONTAL SCALABILITY',
                'item3' => 'Calamardo',
                'item4' => 'Comidinto',
                'item5' => 'Lorem',
                'item6' => 'Ipsum',
                'price' => '$400',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
        ));
        
        
    }
}