<?php

use Illuminate\Database\Seeder;

class DB_1580525977InfoSliderImagesTableSeeder extends Seeder
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
                'id' => 1,
                'image' => 'slides/P4RW9rqqC0TrZnTBlA4u25azG2yzpxFEjYCw5nPR.png',
                'created_at' => '2020-01-15 17:12:47',
                'updated_at' => '2020-01-15 17:12:47',
            ),
        ));
        
        
    }
}