<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'DGII',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Trabajo',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Experiencias',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
        ));
        
        
    }
}