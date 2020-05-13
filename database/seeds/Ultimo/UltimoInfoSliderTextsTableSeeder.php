<?php

use Illuminate\Database\Seeder;

class UltimoInfoSliderTextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_texts')->delete();
        
        \DB::table('info_slider_texts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Plan, Prepare, Design & Execute',
                'contenido' => '<p><span style="font-family: &quot;Times New Roman&quot;, Times, serif;"><span style="font-size: x-large;"></span><span style="font-size: x-large;">We take all your ideas, then, we plan, prepare, design &amp; execute making reality your wishes.</span></span><br></p>',
                'button' => NULL,
                'link' => NULL,
                'display_type' => '0',
                'video' => 'videos/ZoKjYCwKQ7rhg2LbTTfwTgUSg5ZYHNk8YqoM5tKY.mp4',
                'display' => '1',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}