<?php

use Illuminate\Database\Seeder;

class MigrateToVPSInfoSliderImage3sTableSeeder extends Seeder
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
                'id' => 4,
                'image' => 'slides/KadhsspxKuylJUIIVoBzK0cRKbHmpxITwviFqiSJ.png',
                'created_at' => '2019-08-09 07:32:25',
                'updated_at' => '2019-08-09 07:32:25',
            ),
        ));
        
        
    }
}