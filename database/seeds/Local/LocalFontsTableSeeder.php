<?php

use Illuminate\Database\Seeder;

class LocalFontsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fonts')->delete();
        
        \DB::table('fonts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'element' => 'titles',
                'font_link' => '<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">',
                'font_name' => 'Indie Flower',
            ),
            1 => 
            array (
                'id' => '2',
                'element' => 'body',
                'font_link' => '<link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">',
                'font_name' => 'Signika',
            ),
        ));
        
        
    }
}