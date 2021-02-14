<?php

use Illuminate\Database\Seeder;

class InfoSliderImagesTableSeeder extends Seeder
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
                'id' => '7',
                'image' => 'slides/YUrGMqxuFUj2B0GlJf8biDYmyX2SETF8BnOzSJLF.png',
                'created_at' => '2019-08-09 15:42:31',
                'updated_at' => '2019-08-09 15:42:31',
            ),
            1 => 
            array (
                'id' => '6',
                'image' => 'slides/PcWykU00lqScObgR33sV6f2oIFO94za3s3YPiNfX.png',
                'created_at' => '2019-08-09 15:41:24',
                'updated_at' => '2019-08-09 15:41:24',
            ),
        ));
        
        
    }
}