<?php

use Illuminate\Database\Seeder;

class ProblemaFilesTableSeeder extends Seeder
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
                'id' => '14',
                'file' => 'files/AiYc0WxiGFLCxXZAzC4OO5T9fBfczzoC7qiodpw3.pdf',
                'display_name' => 'Quirofano.pdf',
            ),
            1 => 
            array (
                'id' => '13',
                'file' => 'files/KDNH9wvwtK285kUOUPfp4k9rNmHpkDQJrEaAnZ96.pdf',
                'display_name' => 'Imagenes.pdf',
            ),
            2 => 
            array (
                'id' => '12',
                'file' => 'files/U12G1a0VWighoNkF6QqqC8ybcHIokfWrEMgLIDqt.pdf',
                'display_name' => 'Emergencia.pdf',
            ),
            3 => 
            array (
                'id' => '11',
                'file' => 'files/v0gP5XLQczl9wKpwpKCiokUobwpcBnRRIfJ259Or.pdf',
                'display_name' => 'CEM FORMAL PRESENTATION & CATALOG - COVID-19.pdf.pdf',
            ),
        ));
        
        
    }
}