<?php

use Illuminate\Database\Seeder;

class UltimoPricingsTableSeeder extends Seeder
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
                'image' => 'content/pricing/Xj4BC71rUyLwGvyB8VxX8xixCAINkHFeKE78u0iB.png',
                'title' => 'Desglose',
                'price' => '$100',
                'recurrence' => NULL,
                'button' => NULL,
                'link' => NULL,
                'display' => '1',
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            1 => 
            array (
                'id' => '2',
                'image' => 'content/pricing/sCN6UqivMhHHiJLDJELs9Q3qTKYBCadf0pg72RPy.png',
                'title' => 'SMALL TEAM',
                'price' => '$250',
                'recurrence' => NULL,
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '1',
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            2 => 
            array (
                'id' => '3',
                'image' => 'content/pricing/YN0TpcHQPhRZxgdExgq4giv9DfoSAWglMQqculEm.png',
                'title' => 'ENTERPRISE',
                'price' => '$400',
                'recurrence' => NULL,
                'button' => 'Registrate',
                'link' => NULL,
                'display' => '1',
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
        ));
        
        
    }
}