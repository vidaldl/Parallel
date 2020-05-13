<?php

use Illuminate\Database\Seeder;

class UltimoPortfolioCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_categories')->delete();
        
        \DB::table('portfolio_categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Finanzas y de mas',
                'created_at' => NULL,
                'updated_at' => '2019-12-30 14:17:16',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Medico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Nómina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '5',
                'name' => 'asdasdss',
                'created_at' => '2019-12-30 14:20:51',
                'updated_at' => '2019-12-30 14:21:00',
            ),
        ));
        
        
    }
}