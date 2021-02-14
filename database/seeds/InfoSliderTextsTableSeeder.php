<?php

use Illuminate\Database\Seeder;

class InfoSliderTextsTableSeeder extends Seeder
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
                'title' => 'Build web applications',
                'contenido' => '<p>Build web applications ​​RAD - RAPID APPLICATION DEVELOPMENTUse our modern, intuitive, and powerful browser-based environment to quickly build and run ​w​eb apps such as forms​,​ reports,​ pivot, tables, charts, maps, ​PDFs, dashboards, and menus. This makes iterative development easy.&nbsp;</p><p>Use the Business intelligence concept to build management dashboards.EFFORTLESS DESIGN AND CUSTOMIZATIONCustomize your Applications UI without writing a single line of HTML, CSS or Javascript. You can change everything from the way one button looks to the entire theme of the app, with a few points and clicks.​MULTIPLE LANGUAGE PROJECTSCreate projects with support to over 50 languages. Our Data dictionary feature makes it easy to translate table names, fields and messages.</p>',
                'button' => 'Conoce Todas Las Funciones',
                'link' => NULL,
                'video' => 'videos/eEhv2tnAPfVHepH2MHfeugssjO91Ej7FBxz44GMi.mp4',
                'display' => '1',
                'back_color' => '#FFFFFF',
                'created_at' => '2019-07-18 05:36:44',
                'updated_at' => '2019-08-09 14:50:32',
            ),
        ));
        
        
    }
}