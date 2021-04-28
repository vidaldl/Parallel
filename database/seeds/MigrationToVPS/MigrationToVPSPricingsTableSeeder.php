<?php

use Illuminate\Database\Seeder;

class MigrationToVPSPricingsTableSeeder extends Seeder
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
                'image' => 'content/pricing/UAyt6bH3FQvBaQcuf05YCswaUkEknAlHMbZvV4y8.png',
                'title' => 'SISCOP-VENTAS',
                'price' => NULL,
                'recurrence' => NULL,
                'button' => 'Contactanos',
                'link' => '#contact',
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 22:34:07',
                'updated_at' => '2019-07-23 22:34:07',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'content/pricing/Kn1W52vE4nkjVlvhX4fBxsMWBHoJnIW9VWizwH6o.png',
                'title' => 'SISCOP-LITE',
                'price' => NULL,
                'recurrence' => NULL,
                'button' => 'Contactanos',
                'link' => '#contact',
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 22:34:07',
                'updated_at' => '2019-07-23 22:34:07',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'content/pricing/Jv63iNwEXu76LJ8cQ5ehXhZz1gFK9fgG2bVRkNiN.png',
                'title' => 'SISCOP-FULL',
                'price' => NULL,
                'recurrence' => NULL,
                'button' => 'Contactanos',
                'link' => '#contact',
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 22:34:07',
                'updated_at' => '2019-07-23 22:34:07',
            ),
        ));
        
        
    }
}