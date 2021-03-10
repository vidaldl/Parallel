<?php

use Illuminate\Database\Seeder;

class MayimbeLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => '5',
                'image' => 'content/links/iQ4DMrxxwXfNXG7DdB6vOSEG2Wa9kyoLZ3evnw9h.png',
                'title' => 'Aduanas',
                'link' => NULL,
                'deleted_at' => '2020-02-21 18:22:32',
                'created_at' => '2019-08-16 16:18:05',
                'updated_at' => '2020-02-21 18:22:32',
            ),
            1 => 
            array (
                'id' => '10',
                'image' => 'content/links/Vfnq9zPsZmPaFu9bCqFLLbozXn9EYVUxOMDvRKfo.png',
                'title' => 'David',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => '11',
                'image' => 'content/links/00LQi2Fxl9uvqy55QEktHtteNH3O9GQsBThg1pDC.png',
                'title' => 'Hubei',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => '12',
                'image' => 'content/links/py6PhT1XF998tHJWL01HIcWJBDIUXh7RqJj3XG8T.png',
                'title' => 'Bio Light',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '13',
                'image' => 'content/links/yw0O1YFLByBfV5SWYdTXnPGJCsWkaVdvHIcVikOJ.png',
                'title' => 'Weldon',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '14',
                'image' => 'content/links/nufNaQF0MswJkxik1kJNllFE9xOHEqNxn7eI5gea.png',
                'title' => 'Bonetech',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}