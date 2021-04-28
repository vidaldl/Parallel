<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection1sTableSeeder extends Seeder
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
                'id' => 1,
                'logo' => 'content/PN2krNSJIJjD3p2h6YfVU7nRHlIui1LBhZjnf6l5.png',
                'background_image' => 'content/10696314209003_SUNMO_KNIGHTON_VIEWFROMMARVINWINDOW.jpg',
                'title' => 'Por Ventaneros para Ventaneros',
                'tagline' => NULL,
                'button' => 'Conoce Nuestros Servicios',
                'link' => NULL,
                'display' => 1,
                'carousel' => 1,
                'style' => 1,
                'title_size' => 45,
                'subtitle_size' => 32,
                'overlay' => 65,
            ),
            1 => 
            array (
                'id' => 2,
                'logo' => 'content/Vh8ePI2xWiJrr2pomOSymc6FwI3OynvisSdaedd4.png',
                'background_image' => 'content/dYGspCQEkrCPQd3q5NAYlXiBuJELI8Sn7BpNb8vr.png',
                'title' => 'Software de Ventanas por Ventaneros',
                'tagline' => 'y mucho mas....',
                'button' => 'Conoce Nuestros Servicios',
                'link' => 'http://siscopsystems.com',
                'display' => 1,
                'carousel' => 1,
                'style' => 1,
                'title_size' => 60,
                'subtitle_size' => 32,
                'overlay' => 45,
            ),
            2 => 
            array (
                'id' => 3,
                'logo' => 'content/L8nC91dIgzNZgGfqTkiDlCZOWh8HyEbgMttZTZMt.png',
                'background_image' => 'content/XVKcuQ7lOzw278ViHzAywDOBtWCNngHw2QUmr3y8.png',
                'title' => 'Sistema de facturacion',
                'tagline' => 'Para Fabricas, Puntos de venta y  tiendas en general',
                'button' => 'Conoce Nuestros Servicios',
                'link' => NULL,
                'display' => 0,
                'carousel' => 1,
                'style' => 1,
                'title_size' => 60,
                'subtitle_size' => 32,
                'overlay' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'logo' => 'content/sR8iUo0YkOjh9dIw9vL1bWGNafe7e2X4VkmhfzkI.png',
                'background_image' => 'content/fYlKLlxAJkoTiokrrMqnP3U5ph9Q0109gvTvp4P3.png',
                'title' => 'SISCOP TE PERMITE:',
                'tagline' => 'DESGLOSE DE MATERIALES, CORTE OPTIMIZADO, ANÁLISIS DE COSTO E INVERSIÓN, MODULO DE PRODUCCIÓN, CONTROL DE INVENTARIO Y MUCHO MAS...',
                'button' => NULL,
                'link' => NULL,
                'display' => 0,
                'carousel' => 0,
                'style' => 1,
                'title_size' => 60,
                'subtitle_size' => 32,
                'overlay' => 1,
            ),
        ));
        
        
    }
}