<?php

use Illuminate\Database\Seeder;

class MigrationToVPSInfoSliderText2sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_slider_text2s')->delete();
        
        \DB::table('info_slider_text2s')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Modulo de Producción',
                'contenido' => '<p>&nbsp; &nbsp; El modulo de producción de Siscop esta diseñado para hacer mas eficiente cualquier proceso productivo.&nbsp;</p><p>&nbsp; &nbsp; Este modulo cuenta con un sistema de "receta de producto" mediante el cual el usuario puede especificar las cantidades y cortes necesarios en la composición de un producto. Haciéndose asi mucho mas ágil y seguro el proceso de cálculos y medidas necesarias para el proceso.</p><p>&nbsp; &nbsp; En el modulo de producción puedes :</p><ol><li>Desglosar materiales</li><li>Imprimir hojas de corte, tanto &nbsp;expandidas como resumidas.</li><li>Imprimir la hoja de optimización de materiales</li><li>Imprimir tikets de producción</li><li>Control de escapes&nbsp;</li></ol>',
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