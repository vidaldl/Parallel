<?php

use Illuminate\Database\Seeder;

class ProblemaContenidoSectionFootersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section_footers')->delete();
        
        \DB::table('contenido_section_footers')->insert(array (
            0 => 
            array (
                'id' => '1',
                'copy' => 'Caribbean Equipment Medical',
                'logo' => 'content/footer/zutmt7SVUPL6YF7kKwBrGxeoPO64nWJWIICr3S2h.png',
                'social_title' => '¡Mantente conectado!',
                'acerca' => 'Caribbean Equipment Medical es la empresa dedicada al sector médico dentro de nuestro grupo, que también se dedica al sector de la construcción y la agricultura, llevando a cabo nuestros proyectos durante los últimos 35 años con éxito en América Latina, el Caribe y los Estados Unidos.',
                'style' => '2',
                'line' => '2',
                'line_style' => '1',
                'back_color' => '#efecec',
                'color' => '#858383',
                'color_sec' => '#999',
            ),
        ));
        
        
    }
}