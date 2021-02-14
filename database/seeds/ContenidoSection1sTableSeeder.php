<?php

use Illuminate\Database\Seeder;

class ContenidoSection1sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section1s')->delete();
        
        \DB::table('contenido_section1s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'logo' => 'content/uDNZnOsHIUkB0x1p2WK3cAqH4fL5iTWmvuTLeiBf.png',
                'background_image' => 'content/tSURfjgmBisXypPL7WANEPoWHYEbLgXhXj0wcuYd.png',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.',
                'tagline' => 'Logistica Aduanera, Hotelera, Fordwarders, Almacenaje y Transporte',
                'button' => 'Conoce Nuestros Servicios',
                'link' => NULL,
                'display' => '1',
                'carousel' => NULL,
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
            ),
            1 => 
            array (
                'id' => '2',
                'logo' => 'content/q49BoI05wvJUuBLKBKvF8sZaHHp5SkdaY6r1RrgY.png',
                'background_image' => 'content/1783718625bground.jpg',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.1',
                'tagline' => 'Frase Inspiradora que Invite a Actuar',
                'button' => 'Conoce Nuestros Servicios',
                'link' => NULL,
                'display' => '0',
                'carousel' => '1',
                'created_at' => '2019-07-10 03:04:49',
                'updated_at' => '2019-07-10 03:04:49',
            ),
            2 => 
            array (
                'id' => '3',
                'logo' => 'content/849295220Logo-Hidalgo.png',
                'background_image' => 'content/2045733221186.jpg',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.3',
                'tagline' => 'Frase todavía aún más inspiradora que invite a actuar',
                'button' => 'Aprende Más de Nosotros',
                'link' => NULL,
                'display' => '0',
                'carousel' => '1',
                'created_at' => '2019-07-10 03:04:49',
                'updated_at' => '2019-07-10 03:04:49',
            ),
            3 => 
            array (
                'id' => '4',
                'logo' => 'content/U0eeV7e8WlO9zbKSXELUWbPook8pVBXM5ntIexmo.png',
                'background_image' => 'content/17474674141191.jpg',
                'title' => 'Grupo Hidalgo & Asociados S.R.L.',
                'tagline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'button' => 'Conoce Nuestros Servicios',
                'link' => NULL,
                'display' => '0',
                'carousel' => '1',
                'created_at' => '2019-07-10 03:04:49',
                'updated_at' => '2019-07-10 03:04:49',
            ),
        ));
        
        
    }
}