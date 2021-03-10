<?php

use Illuminate\Database\Seeder;

class TextSectionFilesTableSeeder extends Seeder
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
                'id' => '9',
                'file' => 'files/V2eQlC3VxV8UrTFx2Ancw4BpoOcKiQUdQDc6pbaF.pdf',
                'display_name' => 'Emergencia.pdf',
            ),
            1 => 
            array (
                'id' => '8',
                'file' => 'files/EFwVqiyeXdrisG0DwdjirxENm2V5ERxDDL2ST93T.pdf',
                'display_name' => 'Quirófanopdf.pdf',
            ),
            2 => 
            array (
                'id' => '7',
                'file' => 'files/39RfoC9oKdj1UULWJq7eQAgid1gfaXBiSYiaxkEJ.pdf',
                'display_name' => 'Imágenes.pdf',
            ),
            3 => 
            array (
                'id' => '6',
                'file' => 'files/3s1rSKhPsU3qOJqN6xW7Jww2QhM2yB0xgn8BgOZT.pdf',
                'display_name' => 'Presentacion CEM.pdf',
            ),
        ));
        
        
    }
}