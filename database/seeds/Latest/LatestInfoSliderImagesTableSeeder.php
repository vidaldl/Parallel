<?php

use Illuminate\Database\Seeder;

class LatestInfoSliderImagesTableSeeder extends Seeder
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
                'image' => 'slides/AikJ3T4xTqm0YO0Hgn0jBiGYp80l8u8SLb3OTwQm.png',
                'created_at' => '2019-09-09 08:49:50',
                'updated_at' => '2019-09-09 08:49:50',
            ),
            1 => 
            array (
                'id' => '8',
                'image' => 'slides/nM3IxuC9rQ4vri7XNsYeJwVtbAVsTHFtobA9CH6n.png',
                'created_at' => '2019-09-09 08:51:16',
                'updated_at' => '2019-09-09 08:51:16',
            ),
            2 => 
            array (
                'id' => '9',
                'image' => 'slides/P7GPgowM1Iyp7il2u7gfS8YCtfyLSkffVSbsvx4x.png',
                'created_at' => '2019-09-09 08:52:20',
                'updated_at' => '2019-09-09 08:52:20',
            ),
            3 => 
            array (
                'id' => '10',
                'image' => 'slides/ZNqrrBCNWGKtqbg2FkiuqHhJSJAyqPuU1STFYiIN.png',
                'created_at' => '2019-09-09 08:53:24',
                'updated_at' => '2019-09-09 08:53:24',
            ),
        ));
        
        
    }
}