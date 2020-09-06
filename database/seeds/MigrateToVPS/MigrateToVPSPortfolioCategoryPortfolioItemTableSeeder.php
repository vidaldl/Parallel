<?php

use Illuminate\Database\Seeder;

class MigrateToVPSPortfolioCategoryPortfolioItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_category_portfolio_item')->delete();
        
        \DB::table('portfolio_category_portfolio_item')->insert(array (
            0 => 
            array (
                'id' => 2,
                'portfolio_category_id' => 3,
                'portfolio_item_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'portfolio_category_id' => 7,
                'portfolio_item_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'portfolio_category_id' => 1,
                'portfolio_item_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'portfolio_category_id' => 1,
                'portfolio_item_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}