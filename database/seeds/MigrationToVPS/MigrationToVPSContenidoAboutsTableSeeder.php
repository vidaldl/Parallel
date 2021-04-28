<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoAboutsTableSeeder extends Seeder
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
                'id' => 1,
                'hours' => '',
                'web_address' => '',
                'mision' => 'Proporcionar soluciones a la medida de las necesidades empresariales, con el objetivo de soluciones',
                'vision' => 'Queremos proyectar de la mano de nuestros clientes su crecimiento a la medida de sus capacidades,',
                'valores' => 'Asegurar la posición competitiva más fuerte en nuestro mercado, a través de diseños innovadores de Siscop y una excelencia cooperación con el personal operativo,&nbsp;',
                'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d945.9606584727948!2d-69.8281911792755!3d18.490785987746783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8eaf87b17b00de83%3A0xad068a77ba91cd58!2sCalle+3%2C+Santo+Domingo+Este!3m2!1d18.4911082!2d-69.8275992!5e0!3m2!1ses-419!2sdo!4v1563281992123!5m2!1ses-419!2sdo" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
                'back_color' => '#F7F7F7',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-10 10:35:22',
            ),
        ));
        
        
    }
}