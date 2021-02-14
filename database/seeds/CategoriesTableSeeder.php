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
                'id' => '1',
                'name' => 'Empresa',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Anuncios',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Anúncios Aduanas',
                'created_at' => '2019-08-09 15:24:36',
                'updated_at' => '2019-08-09 15:24:36',
            ),
        ));
        
        
    }
}