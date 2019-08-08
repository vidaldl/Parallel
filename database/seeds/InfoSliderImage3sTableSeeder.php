<?php

use Illuminate\Database\Seeder;

class InfoSliderImage3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_image3s')->delete();
        
        \DB::table('info_slider_image3s')->insert(array (
            0 => 
            array (
                'id' => 3,
                'image' => 'slides/09yRNCA3QRIyPfVCk4BmQn1iEV09RU0JTvuZSeMr.png',
                'created_at' => '2019-07-30 19:05:26',
                'updated_at' => '2019-07-30 19:05:26',
            ),
        ));
        
        
    }
}