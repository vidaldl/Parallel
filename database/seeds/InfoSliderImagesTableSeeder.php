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
                'id' => 5,
                'image' => 'slides/CHpZxgwivExzT2rAQsbK5XgR9oUcNrTf4S7oIZ7f.png',
                'created_at' => '2019-07-22 03:06:54',
                'updated_at' => '2019-07-22 03:06:54',
            ),
            1 => 
            array (
                'id' => 6,
                'image' => 'slides/hdfBfGGREVd3Y4qUJxiQVp0juwtDMG5MVbIOR14R.png',
                'created_at' => '2019-07-22 03:07:24',
                'updated_at' => '2019-07-22 03:07:24',
            ),
        ));
        
        
    }
}