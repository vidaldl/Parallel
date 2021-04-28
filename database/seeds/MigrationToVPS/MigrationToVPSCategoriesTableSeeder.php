<?php

use Illuminate\Database\Seeder;

class MigrationToVPSCategoriesTableSeeder extends Seeder
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
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-10 10:35:22',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Anuncios',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-10 10:35:22',
            ),
        ));
        
        
    }
}