<?php

use Illuminate\Database\Seeder;

class MigrationToVPSPortfolioSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_sections')->delete();
        
        \DB::table('portfolio_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Videomanuales de preguntas mas frecuentes',
                'filter' => 1,
            ),
        ));
        
        
    }
}