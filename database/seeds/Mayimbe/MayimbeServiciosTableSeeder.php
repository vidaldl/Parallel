<?php

use Illuminate\Database\Seeder;

class MayimbeServiciosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('servicios')->delete();
        
        \DB::table('servicios')->insert(array (
            0 => 
            array (
                'id' => '1',
                'icon' => 'far fa-dot-circle',
                'icon_img' => NULL,
                'title' => 'Objetivo',
                'contenido' => 'Eque feugiat contentiones ei has. IdSaludos',
                'image' => 'content/servicios/W11dVrGGGIgecSlgs5Y0wKoAEeRF14AtWHaB5pTL.png',
                'contenido_modal' => '<p><br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/LXb3EKWsInQ?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br></p><p><span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><br></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2020-04-01 14:32:29',
                'deleted_at' => '2020-04-01 14:32:29',
            ),
            1 => 
            array (
                'id' => '2',
                'icon' => 'far fa-edit',
                'icon_img' => NULL,
                'title' => 'Objetivo',
                'contenido' => 'Combatir la desigualdad social y disminuir la tasa de mortalidad regional a través de la eficiente colocación de suministros en tecnología de la salud.',
                'image' => 'content/servicios/A5kjDTI00zJsrm4GIAz1xocjIH4iydFt2qHXE36l.png',
                'contenido_modal' => '<p style="text-align: justify;">A video I really like:</p><p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/U3_uxUSeZV4?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:34:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'icon' => 'far fa-building',
                'icon_img' => NULL,
                'title' => 'Misión',
                'contenido' => 'Trabajar en el desarrollo del ámbito de la Salud Poblacional a través de la implementación de Proyectos Sanitarios,  Distribución de Insumos y Servicios en Tecnología Médica.',
                'image' => 'content/servicios/aK0X8giQB1yL7hbbgTRy9cXochzwJ7UaAEsQwzIS.png',
                'contenido_modal' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:35:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '4',
                'icon' => 'fas fa-warehouse',
                'icon_img' => NULL,
                'title' => 'Almacenaje',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => 'content/servicios/hQPHQdctIXIyg0PAQmi4eeXKNUFqstPvaeSo3726.png',
                'contenido_modal' => '',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2020-01-17 15:02:48',
                'deleted_at' => '2020-01-17 15:02:48',
            ),
            4 => 
            array (
                'id' => '5',
                'icon' => 'far fa-calendar-check',
                'icon_img' => NULL,
                'title' => 'Visión',
                'contenido' => 'Mejorar la Calidad de vida de los individuos para ser reconocidos como la Empresa Líder en soluciones de Salud Institucional a nivel regional.',
                'image' => 'content/servicios/BcyhKw891BttjAsDWMa3PjNGOEJrQLPHLq5VJJap.png',
                'contenido_modal' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in&nbsp;</p><p></p><ul><li>reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint&nbsp;</li><li>occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est&nbsp;</li><li>laborum.</li></ul><p></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:35:25',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => '6',
                'icon' => 'store',
                'icon_img' => NULL,
                'title' => 'Tienda',
                'contenido' => 'Tienda online para provar klk con klk',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:15:45',
                'updated_at' => '2019-07-17 14:35:07',
                'deleted_at' => '2019-07-17 14:35:07',
            ),
            6 => 
            array (
                'id' => '7',
                'icon' => 'table',
                'icon_img' => NULL,
                'title' => 'Mesas.com',
                'contenido' => 'En los bulto no nos destacamos',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:17:10',
                'updated_at' => '2019-07-05 20:18:00',
                'deleted_at' => '2019-07-05 20:18:00',
            ),
            7 => 
            array (
                'id' => '8',
                'icon' => 'peace',
                'icon_img' => NULL,
                'title' => 'tranquilidad.com',
                'contenido' => 'ontobul',
                'image' => '',
                'contenido_modal' => '',
                'created_at' => '2019-07-05 20:17:38',
                'updated_at' => '2019-07-05 20:17:58',
                'deleted_at' => '2019-07-05 20:17:58',
            ),
            8 => 
            array (
                'id' => '10',
                'icon' => 'fab fa-accessible-icon',
                'icon_img' => NULL,
                'title' => 'Accesibilidad',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'image' => 'content/servicios/NvZKknFjXpMNkHETwxAggSA5a6RdO91ajeOn3oY0.png',
                'contenido_modal' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>',
                'created_at' => NULL,
                'updated_at' => '2020-03-05 17:37:32',
                'deleted_at' => '2020-03-05 17:37:32',
            ),
            9 => 
            array (
                'id' => '11',
                'icon' => 'fab fa-adn',
                'icon_img' => NULL,
                'title' => 'Calidad',
                'contenido' => 'HOLAAAA',
                'image' => 'content/servicios/2AR5tZ5e9zg49cYjw3RChRaKlg89vVGCnXMkv3dz.png',
                'contenido_modal' => '<p>BUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETIBUENOS DIAS AMIGOS A MI ME GUSTA EL EPAGUETI</p>',
                'created_at' => NULL,
                'updated_at' => '2020-01-23 20:06:00',
                'deleted_at' => '2020-01-23 20:06:00',
            ),
            10 => 
            array (
                'id' => '12',
                'icon' => 'far fa-user-circle',
                'icon_img' => NULL,
                'title' => 'Enfocados en Tí',
                'contenido' => 'Here we show you how it\'s done!',
                'image' => 'content/servicios/PlblaHumiG03iY2ddsHzmt9GjjiUiqE6IgsrfUyo.png',
                'contenido_modal' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/wM5NHC97JBw?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br></p><p>Es así de esa manera</p>',
                'created_at' => NULL,
                'updated_at' => '2020-01-23 20:05:55',
                'deleted_at' => '2020-01-23 20:05:55',
            ),
        ));
        
        
    }
}