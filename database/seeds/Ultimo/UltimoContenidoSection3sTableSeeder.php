<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSection3sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section3s')->delete();
        
        \DB::table('contenido_section3s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'To know a little more about our projects',
                'contenido' => NULL,
                'button' => 'Click here',
                'background_color' => '#1ABC9C',
                'text_color' => '#EEE',
                'link' => 'storage/files/kHxdKUTD5sRez29XDWubJRNFq4kFPKtbMi8DmmeR.pdf',
                'link_type' => '1',
            ),
        ));
        
        
    }
}