<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Empresa',
                'created_at' => '2019-06-23 00:17:24',
                'updated_at' => '2019-06-23 00:17:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Anuncios',
                'created_at' => '2019-06-23 00:17:24',
                'updated_at' => '2019-06-23 00:17:24',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'helll',
                'created_at' => '2019-06-25 14:29:28',
                'updated_at' => '2019-06-25 14:29:28',
            ),
        ));
        
        
    }
}