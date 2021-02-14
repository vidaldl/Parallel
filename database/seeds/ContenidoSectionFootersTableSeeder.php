<?php

use Illuminate\Database\Seeder;

class ContenidoSectionFootersTableSeeder extends Seeder
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
                'id' => '1',
                'copy' => 'Grupo Hidalgo',
                'facebook_link' => 'https://www.facebook.com/SiscopsystemsSRL',
                'instagram_link' => 'https://www.instagram.com/siscopsystems/',
                'twitter_link' => 'https://www.twitter.com',
                'display' => '1',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
        ));
        
        
    }
}