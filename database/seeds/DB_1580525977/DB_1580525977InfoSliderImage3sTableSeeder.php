<?php

use Illuminate\Database\Seeder;

class DB_1580525977InfoSliderImage3sTableSeeder extends Seeder
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
                'id' => 5,
                'image' => 'slides/zkVBoKXCwx0FdHErPJ0PVGiumVyIqSDM29npZzqT.png',
                'created_at' => '2020-01-16 14:35:20',
                'updated_at' => '2020-01-16 14:35:20',
            ),
            1 => 
            array (
                'id' => 6,
                'image' => 'slides/DgyNIS2sPhGYLhey7cjigxZCQVVMC9JeSIiSlQ8X.png',
                'created_at' => '2020-01-16 14:35:56',
                'updated_at' => '2020-01-16 14:35:56',
            ),
            2 => 
            array (
                'id' => 7,
                'image' => 'slides/dvG4nlpehvPgmiWTRlZennjGcEOR6Ns8GDJWI5LA.png',
                'created_at' => '2020-01-17 02:35:07',
                'updated_at' => '2020-01-17 02:35:07',
            ),
        ));
        
        
    }
}