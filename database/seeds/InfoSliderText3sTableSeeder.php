<?php

use Illuminate\Database\Seeder;

class InfoSliderText3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_text3s')->delete();
        
        \DB::table('info_slider_text3s')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Build web applications3',
                'contenido' => '<p>Build web applications ​​RAD - RAPID APPLICATION DEVELOPMENTUse our modern, intuitive, and powerful browser-based environment to quickly build and run ​w​eb apps such as forms​,​ reports,​ pivot, tables, charts, maps, ​PDFs, dashboards, and menus. This makes iterative development easy. Use the Business intelligence concept to build management dashboards.EFFORTLESS DESIGN AND CUSTOMIZATIONCustomize your Applications UI without writing a single line of HTML, CSS or Javascript. You can change everything from the way one button looks to the entire theme of the app, with a few points and clicks.​MULTIPLE LANGUAGE PROJECTSCreate projects with support to over 50 languages. Our Data dictionary feature makes it easy to translate table names, fields and messages.</p><p>looks to the entire theme of the app, with a few points and clicks.​MULTIPLE LANGUAGE PROJECTSCreate projects with support to over 50 languages. Our Data dictionary feature makes it easy to translate table names, fields and messages.</p>',
                'button' => 'Conoce Todas Las Funcioness',
                'link' => '#contact',
                'display' => 1,
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-30 18:25:04',
                'updated_at' => '2019-07-30 18:25:04',
            ),
        ));
        
        
    }
}