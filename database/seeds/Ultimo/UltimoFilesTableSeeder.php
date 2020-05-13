<?php

use Illuminate\Database\Seeder;

class UltimoFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('files')->delete();
        
        \DB::table('files')->insert(array (
            0 => 
            array (
                'id' => '2',
                'file' => 'files/kHxdKUTD5sRez29XDWubJRNFq4kFPKtbMi8DmmeR.pdf',
            'display_name' => 'PRESENTACION DICALCONSA (HAITI Y DR) (1).pdf',
            ),
        ));
        
        
    }
}