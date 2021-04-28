<?php

use Illuminate\Database\Seeder;

class MigrationToVPSInfoSliderImagesTableSeeder extends Seeder
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
                'id' => 8,
                'image' => 'slides/BbU3r88FHSIUakt6SL0MCYszP1OdJJZO1zO977UZ.png',
                'created_at' => '2020-02-14 16:41:41',
                'updated_at' => '2020-02-14 16:41:41',
            ),
        ));
        
        
    }
}