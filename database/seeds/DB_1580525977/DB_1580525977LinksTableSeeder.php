<?php

use Illuminate\Database\Seeder;

class DB_1580525977LinksTableSeeder extends Seeder
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
                'id' => 5,
                'image' => 'content/links/LwIi7YqDXCcmu2Kn8HwTOZGA4uh55uPIpaAIFtU5.png',
                'title' => 'Aduanas',
                'link' => NULL,
                'deleted_at' => '2020-01-17 02:45:28',
                'created_at' => '2019-08-16 16:18:05',
                'updated_at' => '2020-01-17 02:45:28',
            ),
            1 => 
            array (
                'id' => 10,
                'image' => 'content/links/1ji18GjWrRdLPWT6fJ7kJ5kfGMFXxXHnNQowylI1.png',
                'title' => 'Google',
                'link' => '#contact',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'image' => 'content/links/tTIyyk0YHtCXzprnjb4Essh2GU7AsHyBbWX1zwxR.png',
                'title' => 'Impuestos Internos',
                'link' => '#servicios',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'image' => 'content/links/S6SoBwozlOzSgthxF9IGlCplEBlCTAqF1DqGg1VX.png',
                'title' => 'Super Tucano Inter.',
                'link' => 'google.com',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 13,
                'image' => 'content/links/ASgOghdZ3Pp3T5azqaOi3vbrphFsH6gVLuy0yRoR.png',
                'title' => 'Grupo Ramos',
                'link' => 'http://google.com',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'image' => 'content/links/dw9V01ZbiSPc9VhDYZ7c5L1lMDg31OUH2kqPVQwb.png',
                'title' => 'Madre Tierra',
                'link' => 'http://google.com',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}