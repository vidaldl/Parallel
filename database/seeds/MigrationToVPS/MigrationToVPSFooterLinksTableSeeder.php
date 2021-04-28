<?php

use Illuminate\Database\Seeder;

class MigrationToVPSFooterLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('footer_links')->delete();
        
        \DB::table('footer_links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon' => 'icon-line-paper-clip',
                'link' => 'http://www.clip.com',
                'color' => '#f7f7f7',
                'back_color' => '#3b5998',
                'deleted_at' => '2020-03-06 18:35:29',
                'created_at' => NULL,
                'updated_at' => '2020-03-06 18:35:29',
            ),
            1 => 
            array (
                'id' => 2,
                'icon' => 'icon-facebook',
                'link' => 'http://www.siscop.net',
                'color' => '#f7f7f7',
                'back_color' => '#3b5998',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'icon' => 'icon-twitter',
                'link' => 'http://www.twitter.com',
                'color' => '#f7f7f7',
                'back_color' => '#3b5998',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'icon' => 'icon-moon',
                'link' => 'http://www.siscop.net',
                'color' => '#f7f7f7',
                'back_color' => '#3b5998',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}