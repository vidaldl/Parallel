<?php

use Illuminate\Database\Seeder;

class UltimoInfoSliderImage2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_image2s')->delete();
        
        \DB::table('info_slider_image2s')->insert(array (
            0 => 
            array (
                'id' => '5',
                'image' => 'slides/bpNBKMnwKHv3idK5GIUd54SAlrUE2ewuc8FmdU1B.png',
                'created_at' => '2020-01-27 00:33:07',
                'updated_at' => '2020-01-27 00:33:07',
            ),
        ));
        
        
    }
}