<?php

use Illuminate\Database\Seeder;

class LocalFrasesTableSeeder extends Seeder
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
                'title' => '"El éxito debe medirse, no tanto por la posición que uno ha alcanzado en la vida, sino por los obstáculos que ha superado". - Booker T. Washington',
            ),
        ));
        
        
    }
}