<?php

use Illuminate\Database\Seeder;

class LocalInfoSliderTextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_texts')->delete();
        
        \DB::table('info_slider_texts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Audio Libro | Go Pro - Eric Worre',
                'contenido' => '<iframe id="audio_12139492" frameborder="0" allowfullscreen="" scrolling="no" height="200" style="border:1px solid #EEE; box-sizing:border-box; width:100%;" src="https://us.ivoox.com/es/player_ej_12139492_4_1.html?c1=ff6600"></iframe>
<p><span style="caret-color: rgb(51, 51, 51); color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;; font-size: 14px;"></span><span style="font-size: medium;"></span></p><p><span style="font-size: medium;">7 Pasos para Convertirse en un&nbsp;Profesional del Mercadeo en Red</span></p><p><span style="caret-color: rgb(51, 51, 51); color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: medium;">Hace más de veinte años, en una convención de la compañía, Eric Worre tuvo un momento importante que cambió su vida para siempre: en ese evento tomó la decisión de Go Pro y convertirse en un experto del Mercadeo en Red. Desde entonces se ha enfocado a desarrollar las habilidades para lograrlo. Al hacerlo, Eric ha tocado y ha sido tocado por cientos de miles de personas alrededor del mundo. Ahora, él comparte su sabiduría en una guía que encenderá tu pasión por esta profesión y te ayudará a tomar la decisión de convertirte en un profesional y crear la vida de tus sueños. En este libro, con la guía definitiva, aprenderás a: encontrar prospectos, invitarlos a tu producto u oportunidad, presentar tu producto, dar seguimiento a tus prospectos, ayudarles a convertirse en clientes o distribuidores, ayudarles a comenzar debidamente, hacer crecer tu equipo al promover eventos..., y mucho, mucho más. El deseo de Eric es que te decidas a convertirte en un Profesional del Mercadeo en Red, que te decidas por Go Pro. Pues es un hecho que el Mercadeo en Red es una mejor manera. Ahora, ¡digámoselo al mundo!</span><span style="font-size: medium;"><br></span></p><p><span style="font-size: large;"></span></p>',
                'button' => NULL,
                'link' => NULL,
                'display_type' => '0',
                'video' => 'videos/ZoKjYCwKQ7rhg2LbTTfwTgUSg5ZYHNk8YqoM5tKY.mp4',
                'display' => '1',
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}