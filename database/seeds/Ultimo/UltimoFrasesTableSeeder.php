<?php

use Illuminate\Database\Seeder;

class UltimoFrasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frases')->delete();
        
        \DB::table('frases')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'EVERYTHING IS MADE. NOT EVERYTHING IS WELL MADE.',
            ),
        ));
        
        
    }
}