<?php

use Illuminate\Database\Seeder;

class MigrationToVPSContenidoSection5sTableSeeder extends Seeder
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
                'id' => 1,
                'title' => 'Contáctanos',
                'success' => 'success',
                'errors' => 'error',
                'map' => 1,
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60534.37622914844!2d-69.83596853378437!3d18.510884969356354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf86f1f07bf257%3A0x79a94f00155fb584!2sSanto%20Domingo%20Este!5e0!3m2!1ses-419!2sdo!4v1589920306813!5m2!1ses-419!2sdo',
            'info' => '<address style="margin-bottom: 30px; line-height: 1.7;"><font color="#000000">República Dominicana:</font><br><font color="#000000">Autopista San Isidro, Santo Domingo Este.</font><br><br><abbr title="Phone Number" style="color: rgb(0, 0, 0);">Telefono:<br></abbr><font color="#000000">(809) 788-6214</font><br><span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem; color: rgb(0, 0, 0);">(829)&nbsp;</span><font color="#000000">251-6214</font></address><address style="margin-bottom: 30px; line-height: 1.7;"><span style="color: rgb(0, 0, 0);"><abbr title="Email Address" style="">Email:</abbr>&nbsp;<br></span><font color="#000000">info@siscopsystems.com</font></address>',
                'back_color' => '#e5e5e5',
                'back_form' => '#1abc9c',
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