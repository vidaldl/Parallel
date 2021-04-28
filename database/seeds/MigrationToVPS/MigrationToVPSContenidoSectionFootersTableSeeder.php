<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSectionFootersTableSeeder extends Seeder
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
                'id' => 1,
                'copy' => 'Siscop Systems',
                'logo' => 'content/footer/wqk2kkCB5bMZ5Yz7r12GymFrdD9vgcAUAzrFWesI.png',
                'social_title' => 'Enlases importantes',
                'acerca' => 'La capa 8 es una Empresa dedicada a la venta de equipos computacionales cuya meta es establecer un mercado de tal tamano, que no hay un solo dominicano que quiera adquirir un equipo de computadora sin que piense en primer lugar en nosotros.',
                'style' => 2,
                'line' => 1,
                'line_style' => 1,
                'back_color' => '#333',
                'color' => '#CCC',
                'color_sec' => '#999',
            ),
        ));
        
        
    }
}