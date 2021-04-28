<?php

use Illuminate\Database\Seeder;

class MigrationToVPSInfoSliderTextsTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Te mostramos mas...',
                'contenido' => '<p>&nbsp; &nbsp; Siscop, es un Sistema diseñado para el Control de los procesos que se desarrollan en una fábrica, y fue pensado para la industria del vidrio y la manufactura de Puertas y Ventanas.&nbsp;</p><p>&nbsp; &nbsp; Mediante nuestro sistema se pude controlar todos los procesos que ocurren en una empresa, desde los procesos de cotización, producción y facturación hasta los procesos de control financiero y contabilidad mas exigentes.</p><p>&nbsp; &nbsp; Desglose de materiales como vidrio y aluminio, desglose de accesorios y controles de inventario son también procesos que Siscop controla de manera única, siendo el único software en el mercado con las herramientas y facilidades necesarias para lograr esta meta.</p><p>&nbsp; &nbsp; El equipo de Siscop cuenta con una experiencia de más de 20 años asistiendo y ofreciendo soporte técnico a nuestros clientes en las diferentes áreas.</p>',
                'button' => NULL,
                'link' => NULL,
                'display_type' => 0,
                'video' => NULL,
                'display' => 1,
                'back_color' => '#FFFFFF',
            ),
        ));
        
        
    }
}