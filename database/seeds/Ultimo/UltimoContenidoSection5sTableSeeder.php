<?php

use Illuminate\Database\Seeder;

class UltimoContenidoSection5sTableSeeder extends Seeder
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
                'title' => 'Location',
                'map' => '1',
                'map_iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.5148415702433!2d-73.91521178483967!3d40.8605744364501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f40b2e36d78f%3A0xb783e5dec9fbcff9!2s2200%20Cedar%20Ave%2C%20The%20Bronx%2C%20NY%2010468%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sdo!4v1589123779614!5m2!1ses-419!2sdo',
            'info' => '<address style="margin-bottom: 30px; line-height: 1.7;"><span style="color: rgb(0, 0, 0);">North America:<br>2200 Cedar Avenue,&nbsp;<br></span><span style="color: rgb(0, 0, 0);">Bronx</span><span style="color: rgb(0, 0, 0);">, NY 10468.<br><br><abbr title="Phone Number" style="">Phone:</abbr>&nbsp;<br></span><span style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">(917) 443 4644&nbsp;<br></span><span style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">(336) 582 5151&nbsp;</span></address><address style="margin-bottom: 30px; line-height: 1.7;"><abbr title="Email Address" style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Email:</abbr><span style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">&nbsp;<br></span><span style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">ramon.mercedes@gmail.com<br></span><span style="color: rgb(0, 0, 0); font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">ramonmercedes@adcon-inc.com</span></address>',
                'back_color' => '#e5e5e5',
                'back_form' => '#1abc9c',
                'name' => 'Name',
                'email' => 'Email',
                'phone' => 'Phone',
                'services' => 'Services',
                'subject' => 'Subject',
                'message' => 'Message',
                'send_button' => 'Send Message',
            ),
        ));
        
        
    }
}