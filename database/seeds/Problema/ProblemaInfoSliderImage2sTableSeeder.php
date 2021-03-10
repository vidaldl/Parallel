<?php

use Illuminate\Database\Seeder;

class ProblemaInfoSliderImage2sTableSeeder extends Seeder
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
                'id' => '6',
                'image' => 'slides/3t2UIK1pl6S62iWbjZd4AgxuOpOiZm6mkGzg9qJc.png',
                'created_at' => '2020-03-04 19:19:10',
                'updated_at' => '2020-03-04 19:19:10',
            ),
        ));
        
        
    }
}