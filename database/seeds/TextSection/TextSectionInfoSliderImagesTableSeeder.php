<?php

use Illuminate\Database\Seeder;

class TextSectionInfoSliderImagesTableSeeder extends Seeder
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
                'image' => 'slides/paCHui81Y1TcgaR4yhkIRiC4j1h28jjU7UTp3btH.png',
                'created_at' => '2020-04-03 01:09:00',
                'updated_at' => '2020-04-03 01:09:00',
            ),
            1 => 
            array (
                'id' => '15',
                'image' => 'slides/e6oyZWXg1OhqmRJVogRbESGR0vz9QurfXiAJ3KtH.png',
                'created_at' => '2020-04-03 01:07:15',
                'updated_at' => '2020-04-03 01:07:15',
            ),
            2 => 
            array (
                'id' => '14',
                'image' => 'slides/fBsxHIyxhjWfPLlvzstSE9vWMQ3iK0FVXbP0ZDVb.png',
                'created_at' => '2020-04-03 01:04:59',
                'updated_at' => '2020-04-03 01:04:59',
            ),
            3 => 
            array (
                'id' => '9',
                'image' => 'slides/ao8yfdH4mYjrbCrV7JZ5zHtfc1WlU73F3QNHxCZu.png',
                'created_at' => '2020-04-03 01:01:06',
                'updated_at' => '2020-04-03 01:01:06',
            ),
            4 => 
            array (
                'id' => '11',
                'image' => 'slides/pbmVVEYGsbx1Vh9x4wNW2Xdwyeb1rsJzkigjb1ap.png',
                'created_at' => '2020-04-03 01:02:02',
                'updated_at' => '2020-04-03 01:02:02',
            ),
            5 => 
            array (
                'id' => '12',
                'image' => 'slides/vrFdLw2mHMqwLOArzbLQgOWD9doePGwkWSgySDEk.png',
                'created_at' => '2020-04-03 01:02:21',
                'updated_at' => '2020-04-03 01:02:21',
            ),
            6 => 
            array (
                'id' => '13',
                'image' => 'slides/M9foV13GOwt0wuyhknVgBaNOlvJ1LT2t2atEGqy1.png',
                'created_at' => '2020-04-03 01:02:38',
                'updated_at' => '2020-04-03 01:02:38',
            ),
        ));
        
        
    }
}