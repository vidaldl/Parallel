<?php

use Illuminate\Database\Seeder;

class MigrationToVPSFontsTableSeeder extends Seeder
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
                'id' => 1,
                'element' => 'titles',
                'font_link' => '<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">',
                'font_name' => 'Raleway',
            ),
            1 => 
            array (
                'id' => 2,
                'element' => 'body',
                'font_link' => '<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">',
                'font_name' => 'Lato',
            ),
        ));
        
        
    }
}