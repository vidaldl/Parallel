<?php

use Illuminate\Database\Seeder;

class UltimoInfoSliderImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_images')->delete();
        
        \DB::table('info_slider_images')->insert(array (
            0 => 
            array (
                'id' => '16',
                'image' => 'slides/vzu34DEj1UwZg0cMgi3Issm3Q4nVtoX99mRYu9or.png',
                'created_at' => '2020-01-26 05:26:07',
                'updated_at' => '2020-01-26 05:26:07',
            ),
            1 => 
            array (
                'id' => '17',
                'image' => 'slides/aKRuSufydpRfq4vKPLzdveBzUG6b3P5oPivP582e.png',
                'created_at' => '2020-01-26 05:26:47',
                'updated_at' => '2020-01-26 05:26:47',
            ),
        ));
        
        
    }
}