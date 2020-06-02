<?php

use Illuminate\Database\Seeder;

class LatestContenidoSection5sTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contenido_section5s')->delete();
        
        \DB::table('contenido_section5s')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => 'Contáctanos',
                'success' => 'Mensaje Enviado',
                'errors' => 'Error en el Formulario',
                'map' => '1',
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15134.439606309257!2d-69.96693295000001!3d18.5013211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8a2884a5277d%3A0x35aaa0d3e2e0d40!2sShell!5e0!3m2!1ses-419!2sdo!4v1589066660641!5m2!1ses-419!2sdo',
            'info' => '<address style="margin-bottom: 30px; line-height: 1.7;"><span style="color: rgb(0, 0, 0); font-size: 1rem;">Calle Juan Pablo Duarte 3, esq. Av Ecologica, Paraiso Oriental Santo Domingo Este, Republica Dominicana&nbsp;</span><br></address><address style="margin-bottom: 30px; line-height: 1.7;"><span style="color: rgb(0, 0, 0);"><strong>Tel.</strong> (809) 748-1414<br><strong>Fax.</strong>&nbsp;</span><span style="color: rgb(0, 0, 0); font-size: 1rem;">(809) 748-1414</span></address>',
                'back_color' => '#e5e5e5',
                'back_form' => '#0acfaa',
                'name' => 'Nombre',
                'email' => 'Email',
                'phone' => 'Teléfono',
                'services' => 'Servicios',
                'subject' => 'Asunto',
                'message' => 'Mensaje',
                'send_button' => 'Enviar',
            ),
        ));
        
        
    }
}