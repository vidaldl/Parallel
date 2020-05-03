<?php

use Illuminate\Database\Seeder;

class LocalInfoSliderImage3sTableSeeder extends Seeder
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
                'id' => '11',
                'image' => 'slides/VtkyDwLnSxiRwaHTPbcNSovYdTDaRoLmJYx9gRJS.png',
                'created_at' => '2020-05-03 01:44:21',
                'updated_at' => '2020-05-03 01:44:21',
            ),
        ));
        
        
    }
}