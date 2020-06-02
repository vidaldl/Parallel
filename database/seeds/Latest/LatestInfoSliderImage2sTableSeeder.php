<?php

use Illuminate\Database\Seeder;

class LatestInfoSliderImage2sTableSeeder extends Seeder
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
                'id' => '3',
                'image' => 'slides/P5syvFAtds6JBDCawmfoVAvE7KWZEj5wo1GwOi7x.png',
                'created_at' => '2019-07-30 17:42:32',
                'updated_at' => '2019-07-30 17:42:32',
            ),
            1 => 
            array (
                'id' => '7',
                'image' => 'slides/n9dcmhAN08fguxJOjL86QHLIP3qopnKgxNzdWUkY.png',
                'created_at' => '2020-05-31 18:52:49',
                'updated_at' => '2020-05-31 18:52:49',
            ),
            2 => 
            array (
                'id' => '6',
                'image' => 'slides/JiSp7OT88dcBVrOS5v2pwDS8QwlJ0Piy8QeKrZ4s.png',
                'created_at' => '2020-05-31 18:46:18',
                'updated_at' => '2020-05-31 18:46:18',
            ),
        ));
        
        
    }
}