<?php

use Illuminate\Database\Seeder;

class LocalInfoSliderImagesTableSeeder extends Seeder
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
                'id' => '3',
                'image' => 'slides/4W6Ac3JG0IDetzXby6S86UFo0Az2jnDXTwqCpFDo.png',
                'created_at' => '2020-05-02 19:51:27',
                'updated_at' => '2020-05-02 19:51:27',
            ),
        ));
        
        
    }
}