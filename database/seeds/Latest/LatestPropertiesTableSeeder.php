<?php

use Illuminate\Database\Seeder;

class LatestPropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('properties')->delete();
        
        \DB::table('properties')->insert(array (
            0 => 
            array (
                'id' => '1',
                'image' => NULL,
                'name' => 'hola',
                'description' => NULL,
                'city' => NULL,
                'location' => NULL,
                'precio' => NULL,
                'created_at' => '2019-12-24 22:03:47',
                'updated_at' => '2019-12-24 22:03:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}