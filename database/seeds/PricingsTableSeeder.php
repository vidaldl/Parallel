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
                'image' => 'content/pricing/8yH051qGM2NHCMaQQqHCbbjesuZzIC5zVrzCcV3B.png',
                'title' => 'Desglose',
                'price' => '100',
                'recurrence' => 'Por Més',
                'button' => 'Hello',
                'link' => NULL,
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'content/pricing/7DxoU6Vgr1H1qBiSHBwsxATYS3zWWSCun5YMjc6h.png',
                'title' => 'SMALL TEAM',
                'price' => '250',
                'recurrence' => 'Por Més',
                'button' => 'Registrate',
                'link' => NULL,
                'display' => 1,
                'back_color' => NULL,
                'created_at' => '2019-07-23 17:32:44',
                'updated_at' => '2019-07-23 17:32:44',
            ),
            2 => 
            array (
                'id' => 4,
                'image' => 'content/pricing/etFCOHfg9O2WqezQR0BQdjC4eZrOhybFEEbah8s6.png',
                'title' => 'Hello',
                'price' => '500',
                'recurrence' => 'Por',
                'button' => 'No',
                'link' => NULL,
                'display' => 0,
                'back_color' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}