<?php

use Illuminate\Database\Seeder;
use App\InfoSliderText2;
class InfoSlidersSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $text = InfoSliderText2::create([
        'title' => 'Build web applications',
        'contenido' => 'Build web applications
​​RAD - RAPID APPLICATION DEVELOPMENTUse our modern, intuitive, and powerful browser-based environment to quickly build and run ​w​eb apps such as forms​,​ reports,​ pivot, tables, charts, maps, ​PDFs, dashboards, and menus. This makes iterative development easy. Use the Business intelligence concept to build management dashboards.EFFORTLESS DESIGN AND CUSTOMIZATIONCustomize your Applications UI without writing a single line of HTML, CSS or Javascript. You can change everything from the way one button looks to the entire theme of the app, with a few points and clicks.​MULTIPLE LANGUAGE PROJECTSCreate projects with support to over 50 languages. Our Data dictionary feature makes it easy to translate table names, fields and messages.',
        'button' => 'Conoce Todas Las Funciones',
        'display' => '1',
      ]);
  }
}
