<?php

use Illuminate\Database\Seeder;

class LocalGalleryItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_items')->delete();
        
        \DB::table('gallery_items')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Carrusel de tres imagenes',
                'subtitle' => 'Alguna Información',
                'desc_title' => 'Mostramos tres Imágenes',
                'video' => 'https://www.youtube.com/watch?v=OX31kZbAXsA',
                'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>',
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'deleted_at' => '2020-04-18 14:22:48',
                'created_at' => NULL,
                'updated_at' => '2020-04-18 14:22:48',
            ),
            1 => 
            array (
                'id' => '2',
                'title' => 'Imagen Particular',
                'subtitle' => 'Un poco de información',
                'desc_title' => 'Mostramos una Imagen',
                'video' => NULL,
                'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>',
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '1',
                'deleted_at' => '2020-04-18 14:22:53',
                'created_at' => NULL,
                'updated_at' => '2020-04-18 14:22:53',
            ),
            2 => 
            array (
                'id' => '3',
                'title' => 'Los asiáticos y el Mercadeo en Red',
                'subtitle' => 'José Bobadilla',
                'desc_title' => '¿Por qué los asiáticos tienen tanto éxito en el mercadeo en red?',
                'video' => 'https://www.youtube.com/watch?v=KAd72JKjPrg',
                'desc' => '<p>¿Disciplina? ¿Constancia? ¿Compromiso? ¿Por qué los asiáticos avanzan tan rápido en el Mercadeo en Red?</p><p></p>',
                'left_btn' => 'Expandir',
                'right_btn' => 'Más...',
                'display_tooltip' => '0',
                'display_type' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-04-18 13:22:37',
            ),
            3 => 
            array (
                'id' => '9',
                'title' => 'Lo que no te dijeron de las Redes de Mercadeo',
                'subtitle' => 'Yudis Lonzoy',
                'desc_title' => 'Si estás buscando motivación o una fórmula mágica, este video no es para ti...',
                'video' => 'https://www.youtube.com/watch?v=GQlZapv1Ap4',
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '0',
                'display_type' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => '8',
                'title' => 'SOLO EL 1% DE LAS PERSONAS ESTÁN...',
                'subtitle' => 'Will Smith',
                'desc_title' => '¿Eres tú parte de ese 1%?',
                'video' => 'https://www.youtube.com/watch?v=xrRUuZoPe_w',
            'desc' => '<p><span style="caret-color: rgb(3, 3, 3); color: rgb(3, 3, 3); font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap; background-color: rgb(249, 249, 249);">El 99% de las personas no están dispuestos a hacer lo necesario para hacer sus sueños realidad.
Nuestras creencias, lo que pensamos y lo que sentimos, crean nuestra Vida. Sentirnos bien ahora hace que estemos creando un futuro mejor para nosotros.
Hace muchos años, dice Will Smith, antes de llegar a consagrarme como actor, tuve la oportunidad de viajar a Austria, donde un amigo dijo una frase que cambiaría mi vida desde ese mismo instante. Me dijo: <em>"Will, aquí en Austria ¡ESTA PROHIBIDO SER POBRE!"</em>
Desde ese momento esa idea siempre retumbó en mi mente y me inspiró cada día a lograr mis sueños. Puse como regla elemental en mi vida tal prohibición. 
Quizá si muchos países tuvieran&nbsp;</span><span style="caret-color: rgb(3, 3, 3); color: rgb(3, 3, 3); font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap; background-color: rgb(249, 249, 249);">aquella frase</span><span style="caret-color: rgb(3, 3, 3); color: rgb(3, 3, 3); font-family: Roboto, Arial, sans-serif; font-size: 14px; white-space: pre-wrap; background-color: rgb(249, 249, 249);">, aunque sea solo como eslogan, …hoy en día no habría tanta gente dependiendo de las migajas de sus gobiernos.</span></p>',
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '0',
                'display_type' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => '5',
                'title' => 'Carrusel de Cuatro Imagenes',
                'subtitle' => 'Un poco de información',
                'desc_title' => 'Mostramos Cuatro Imagenes',
                'video' => NULL,
                'desc' => '<p><font face="Times New Roman, Times, serif" size="4" style="font-size: x-large;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</font><br></p>',
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '1',
                'deleted_at' => '2020-04-18 14:22:55',
                'created_at' => NULL,
                'updated_at' => '2020-04-18 14:22:55',
            ),
            6 => 
            array (
                'id' => '6',
                'title' => '1',
                'subtitle' => NULL,
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '1',
                'deleted_at' => '2020-04-18 13:22:41',
                'created_at' => NULL,
                'updated_at' => '2020-04-18 13:22:41',
            ),
            7 => 
            array (
                'id' => '7',
                'title' => 'semana 1',
                'subtitle' => NULL,
                'desc_title' => NULL,
                'video' => NULL,
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '1',
                'display_type' => '0',
                'deleted_at' => '2020-04-18 14:22:33',
                'created_at' => NULL,
                'updated_at' => '2020-04-18 14:22:33',
            ),
            8 => 
            array (
                'id' => '10',
                'title' => '¿Por qué he Perdido mi Chispa y me siento DESMOTIVADO?',
                'subtitle' => 'Jordi Wu',
                'desc_title' => '3 Razones por las que te sientes desmotivado',
                'video' => 'https://www.youtube.com/watch?v=EX__Fidcp3M',
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => '0',
                'display_type' => '1',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}