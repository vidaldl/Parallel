<?php

use Illuminate\Database\Seeder;

class LastFilesTableSeeder extends Seeder
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
                'id' => '3',
                'file' => 'files/FVLGrCLWi8SXoUhcO3mZ4cLc5iWjVuxlHDacVd8h.pdf',
                'display_name' => 'Imagenes_compressed.pdf',
            ),
            1 => 
            array (
                'id' => '2',
                'file' => 'files/NSjyF2ieE7OnsUWFJqQ1aH3DM5HUoFKHv1DAggou.pdf',
                'display_name' => 'Presentacion CEM.pdf',
            ),
        ));
        
        
    }
}