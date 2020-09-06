<?php

use Illuminate\Database\Seeder;

class MigrateToVPSLinksTableSeeder extends Seeder
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
                'id' => 5,
                'image' => 'content/links/zvB7C5ZJcC0dtKX9UHt3Ix0y5UMDioYUEKyG5ZPZ.png',
                'title' => 'Aduanas',
                'link' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-08-16 20:18:05',
                'updated_at' => '2019-08-16 20:18:05',
            ),
            1 => 
            array (
                'id' => 10,
                'image' => 'content/links/HeC1FCr50iHpQAtsJBMuntM5gI8X3YKlCUroT7df.png',
                'title' => 'Google',
                'link' => '#contact',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'image' => 'content/links/wdZSUlFwGc4HbOCKkok8fJjeL7KkLF4MhdcjN9TH.png',
                'title' => 'Impuestos Internos',
                'link' => '#servicios',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'image' => 'content/links/xnwqNx0zMJc42wjKWKvB6FSzEK7UkppjjMzPYPN6.png',
                'title' => 'Super Tucano Inter.',
                'link' => 'google.com',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}