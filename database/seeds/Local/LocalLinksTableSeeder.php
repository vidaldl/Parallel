<?php

use Illuminate\Database\Seeder;

class LocalLinksTableSeeder extends Seeder
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
                'image' => 'content/links/fiWMIAgAYGKeFLJlSE1IW5V3Ong859n4TrVjMOfn.png',
                'title' => 'Open Meeting',
                'link' => 'https://www.dropbox.com/s/h89p2bsmqajyanh/IMG_0377.jpeg?dl=0',
                'deleted_at' => NULL,
                'created_at' => '2019-08-16 16:18:05',
                'updated_at' => '2020-02-11 06:13:07',
            ),
            1 => 
            array (
                'id' => '10',
                'image' => 'content/links/iD4TdC0zCGx9DXOB2JOgZMAMLQvNvIibsfM7c64w.png',
                'title' => 'Google',
                'link' => '#contact',
                'deleted_at' => '2020-05-02 18:10:58',
                'created_at' => NULL,
                'updated_at' => '2020-05-02 18:10:58',
            ),
            2 => 
            array (
                'id' => '11',
                'image' => 'content/links/0DXlptL8pUhZHajZalvtHW96tjgcHsjqFmfVXlqt.png',
                'title' => 'Impuestos Internos',
                'link' => '#servicios',
                'deleted_at' => '2020-05-02 18:11:01',
                'created_at' => NULL,
                'updated_at' => '2020-05-02 18:11:01',
            ),
            3 => 
            array (
                'id' => '12',
                'image' => 'content/links/xnWQQ5OCyftMGsJigFXzc1Fe1WLgpo06Xqj4zsMi.png',
                'title' => 'Super Tucano Inter.',
                'link' => 'google.com',
                'deleted_at' => '2020-05-02 18:11:02',
                'created_at' => NULL,
                'updated_at' => '2020-05-02 18:11:02',
            ),
            4 => 
            array (
                'id' => '13',
                'image' => 'content/links/9vvpwb72rPX9xyurpuJ7qTRuo1YOtCwxfOBlP577.png',
                'title' => 'Grupo Ramos',
                'link' => 'http://google.com',
                'deleted_at' => '2020-05-02 18:11:03',
                'created_at' => NULL,
                'updated_at' => '2020-05-02 18:11:03',
            ),
            5 => 
            array (
                'id' => '14',
                'image' => 'content/links/B8YXyptdFEBlOeGE9hY61tEiEeftfc3qpFDtXLoE.png',
                'title' => 'Madre Tierra',
                'link' => 'http://google.com',
                'deleted_at' => '2020-05-02 18:11:07',
                'created_at' => NULL,
                'updated_at' => '2020-05-02 18:11:07',
            ),
            6 => 
            array (
                'id' => '15',
                'image' => 'content/links/9As1m5LCE0Da9DFvn0B1MHfyDcws7bCiGK3b4PIS.png',
                'title' => 'Convención 2020 - Anaheim, California, Estados Unidos',
                'link' => 'https://aseaconvention.com',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}