<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'lol',
                'title' => 'Aduanas',
                'link' => 'https://google.com',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}