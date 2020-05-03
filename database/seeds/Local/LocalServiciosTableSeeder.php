<?php

use Illuminate\Database\Seeder;

class LocalServiciosTableSeeder extends Seeder
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
                'icon' => 'fas fa-anchor',
                'icon_img' => 'content/servicios/icons/bRNmkIpyg9Uh3Ts9AM0ZDwCNfirUeKZPiR7hy7ub.png',
                'title' => 'Generar confianza',
                'contenido' => 'Las ventajas del mercadeo en red son mucho mayores que las de un negocio tradicional..., pero para que le vaya bien, debe tener una mentalidad de éxito!!!',
                'image' => 'content/servicios/TS6f3ioKMiR41xNH8EN035vmqF4jtdTnjod55fZF.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/rs5grBrtnn8?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe><br></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-25 20:42:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'icon' => 'far fa-lightbulb',
                'icon_img' => 'content/servicios/icons/TYy1xmbroglyWJgVt4QKkod6CqC0nehKl9tjgoSp.png',
                'title' => 'El ascenso del emprendedor',
                'contenido' => 'El mercadeo en red no es perfecto, simplemente es mejor!!! Ve este documental para saber por qué...',
                'image' => 'content/servicios/pxTdxQEmkuXNVublSV0TgFA4y7xuoFORlRyQCRCV.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/dFL9mxE_n1c?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => '2019-07-01 15:12:57',
                'updated_at' => '2019-07-17 14:34:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '3',
                'icon' => 'far fa-dot-circle',
                'icon_img' => 'content/servicios/icons/XeRTjESibgCZZxWmUFdOjtlYO2BuzFo3kLlwSdRS.png',
                'title' => 'Establecer objetivos',
                'contenido' => 'Vamos a comenzar fijando una serie de objetivos reales para su negocio...',
                'image' => 'content/servicios/PxWi8RQoG0X6RBXnHTIWIfDw2Z8J8akdORogl8jV.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/eJAIxIRcpco?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
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
                'icon' => 'far fa-play-circle',
                'icon_img' => 'content/servicios/icons/YbMk0lwPlNusP6AbT2NTouN3h3qs8AqEPk0ND8pK.png',
                'title' => 'Comenzar de la manera más eficaz',
                'contenido' => 'El nivel en el que te unas al negocio determina parte de tu éxito!!!',
                'image' => 'content/servicios/1ahI3nn27pqlJQ3eFhaeRwuQ0wqjJPRxvCj7Djsk.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/wvsI2jzr10o?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
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
                'id' => '9',
                'icon' => 'fas fa-hand-peace',
                'icon_img' => 'content/servicios/icons/sX0diFAvIOd4XYpFcjNHtpfw3LBA4uKTjqhsxcLT.png',
                'title' => 'Convertirse en un fan incondicional',
                'contenido' => 'La importancia de ser un gran apasionado de sus productos o servicios...',
                'image' => 'content/servicios/jgAA5VaUyygoXdk5edzYHYWYEeA2f8AJ85f4QcZB.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/z2gfpyN9Rzg?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen" style="font-size: 1rem;"></iframe>ESte video me gusta</p><p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/OIggTgbpCtc?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => '2020-01-08 00:55:14',
                'updated_at' => '2020-01-08 00:55:14',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => '10',
                'icon' => 'fas fa-money-bill-wave',
                'icon_img' => 'content/servicios/icons/GxqNUMjPQGrGsYT51xHyIKVC9LGhiRWSzi4Rc2Af.png',
                'title' => 'Plan de compensación',
                'contenido' => 'El nivel base del plan de compensación es importante, porque su duplicación te llevará al éxito.',
                'image' => 'content/servicios/SlXpSdRzUgYaBXp9TXN4UIYEYb8oILrvaBpCOkRP.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/WIOr_vss9Sg?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => '13',
                'icon' => 'far fa-clock',
                'icon_img' => NULL,
                'title' => 'Gestión de Tiempo y Trabajo',
                'contenido' => 'Usted no puede gestionar el tiempo, pero sí puede gestionar las tareas de su trabajo.',
                'image' => 'content/servicios/S4ZKUnhu9wYYHzaRm2NdFIukRdlRWJ7BrccueWKT.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/7u2svIoCsOY?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
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
            12 => 
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
            13 => 
            array (
                'id' => '14',
                'icon' => 'fas fa-mountain',
                'icon_img' => NULL,
                'title' => 'Comparta su historia',
                'contenido' => 'Comparta su historia con todos, incluyendo su familia y amigos...',
                'image' => 'content/servicios/wVh93k4IlwjndYuAEAPZbypb096YGqnKmHFyJjO8.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/RiSFuPAvXi4?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => '15',
                'icon' => 'fas fa-business-time',
                'icon_img' => NULL,
                'title' => 'Captura tus primeros clientes',
                'contenido' => 'Es hora de ponerse manos a la obra y de captar sus primeros clientes...',
                'image' => 'content/servicios/vBNQ6m9xZC8drnyS2xlLmwKpBWYEt6bxe9ntltY6.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/1g_ShuuJnWM?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => '16',
                'icon' => 'fas fa-people-carry',
                'icon_img' => NULL,
                'title' => 'Conseguir los primeros distribuidores',
                'contenido' => 'Los distribuidores deben ser personas que quieran trabajar con usted...',
                'image' => 'content/servicios/8bwXJzeZoOjfEahJgwKikZk4xNqdTLXzZl6TSq8l.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/pHTM7rMt1vo?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => '17',
                'icon' => 'fas fa-hotel',
                'icon_img' => NULL,
                'title' => 'Inscripción de eventos',
                'contenido' => 'Inscríbase ahora en la próxima convención de la compañía, no lo deje para después!!!',
                'image' => 'content/servicios/YH2uWrtDohaJM6cNGSQrtmOOSDeK7yDznC0mWdTk.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/XaPpGkN7RQk?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => '18',
                'icon' => 'fas fa-hand-holding-heart',
                'icon_img' => NULL,
                'title' => 'Sus motivos para hacerlo',
                'contenido' => 'Piensa en los motivos que te han llevado a hacer esto...',
                'image' => 'content/servicios/C8ihB9a8mfVRsG4XnoExDrkG5iy1TjPN6x6czm8H.png',
                'contenido_modal' => '<p><iframe width=" 480" height="270" src="https://www.youtube.com/embed/S_AtokqQpzY?feature=oembed" frameborder="0" allowfullscreen="allowfullscreen"></iframe>&nbsp;<br></p>',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}