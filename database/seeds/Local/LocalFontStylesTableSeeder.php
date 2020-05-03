<?php

use Illuminate\Database\Seeder;

class LocalFontStylesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('font_styles')->delete();
        
        \DB::table('font_styles')->insert(array (
            0 => 
            array (
                'id' => '6',
                'name' => 'Raleway',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => '7',
                'name' => 'Lato',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '8',
                'name' => 'Roboto',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '9',
                'name' => 'Roboto Condensed',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '10',
                'name' => 'Roboto Mono',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '11',
                'name' => 'Trade Winds',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => '12',
                'name' => 'Lobster',
                'link' => '<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => '13',
                'name' => 'Indie Flower',
                'link' => '<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => '15',
                'name' => 'Pacifico',
                'link' => '<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => '16',
                'name' => 'Signika',
                'link' => '<link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}