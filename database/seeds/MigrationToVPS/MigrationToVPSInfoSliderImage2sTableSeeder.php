<?php

use Illuminate\Database\Seeder;

class MigrationToVPSInfoSliderImage2sTableSeeder extends Seeder
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
                'id' => 4,
                'image' => 'slides/k1ioVriDGX6yHPFXLesIuHnf8ITXH2UlKNp1VyYM.png',
                'created_at' => '2020-02-14 17:31:29',
                'updated_at' => '2020-02-14 17:31:29',
            ),
            1 => 
            array (
                'id' => 5,
                'image' => 'slides/bKrxRanOj2TPUnE48M5odmDwABmnSYFSByPQIg1i.png',
                'created_at' => '2020-02-14 17:32:04',
                'updated_at' => '2020-02-14 17:32:04',
            ),
            2 => 
            array (
                'id' => 6,
                'image' => 'slides/uG14dNzrbuTGuhfnH71smYlQSBhS3y7TKQLajfaP.png',
                'created_at' => '2020-02-14 17:32:26',
                'updated_at' => '2020-02-14 17:32:26',
            ),
            3 => 
            array (
                'id' => 7,
                'image' => 'slides/lMep7oPLw04zKIFGxrs31MOOCGXQVZMNbreQ2sTx.png',
                'created_at' => '2020-02-14 17:36:27',
                'updated_at' => '2020-02-14 17:36:27',
            ),
        ));
        
        
    }
}