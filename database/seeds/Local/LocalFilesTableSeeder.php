<?php

use Illuminate\Database\Seeder;

class LocalFilesTableSeeder extends Seeder
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
                'id' => '5',
                'file' => 'files/WGtXiDv2aiSZ5bcARmqbDNjFo1GPBTzFnZaNt5Gt.pdf',
                'display_name' => 'Pasos para Prospectar.pdf',
            ),
        ));
        
        
    }
}