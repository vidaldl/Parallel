<?php

use Illuminate\Database\Seeder;

class DB_1580525977ContenidoSectionFootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section_footers')->delete();
        
        \DB::table('contenido_section_footers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'copy' => 'Madre Tierra',
                'facebook_link' => 'https://www.facebook.com/SiscopsystemsSRL',
                'instagram_link' => 'https://www.instagram.com/siscopsystems/',
                'twitter_link' => 'https://www.twitter.com',
                'display' => 1,
                'created_at' => '2019-06-26 00:01:15',
                'updated_at' => '2019-06-26 00:01:15',
            ),
        ));
        
        
    }
}