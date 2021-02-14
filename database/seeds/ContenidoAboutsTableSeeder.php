<?php

use Illuminate\Database\Seeder;

class ContenidoAboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_abouts')->delete();
        
        \DB::table('contenido_abouts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'hours' => '',
                'web_address' => '',
                'mision' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'vision' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'valores' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1269.9436180580562!2d-69.96064327884315!3d18.501203111946012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8a2313d7a381%3A0x479899c5bcce21c7!2sClinica+Independencia+Norte!5e0!3m2!1ses-419!2sdo!4v1562082185971!5m2!1ses-419!2sdo" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'back_color' => '#F7F7F7',
                'created_at' => '2019-07-02 02:42:54',
                'updated_at' => '2019-07-02 02:42:54',
            ),
        ));
        
        
    }
}