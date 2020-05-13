<?php

use Illuminate\Database\Seeder;

class UltimoInfoSliderText2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_text2s')->delete();
        
        \DB::table('info_slider_text2s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'What We Offer',
                'contenido' => '<ul><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Planning</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Design</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Construction</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Professionalism</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Compromise</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">Responsibility</span></li><li style="font-size: x-large;"><span style="font-family: &quot;Times New Roman&quot;, Times, serif;">High Quality</span></li></ul>',
                'button' => NULL,
                'link' => NULL,
                'display_type' => '0',
                'video' => NULL,
                'display' => '0',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}