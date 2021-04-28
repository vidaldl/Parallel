<?php

use Illuminate\Database\Seeder;

class MigrationToVPSPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Modulo de produccion',
                'description' => 'Desglose',
                'contenido' => 'Hacemos mas fácil el manejo de producción, generando desgloses instantáneos de puertas y ventanas&nbsp;',
                'image' => 'posts/720605407images.jpg',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-15 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-15 18:42:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Inventario',
                'description' => 'Almacén',
                'contenido' => 'Siscop Systems, te ayuda&nbsp; a mantener tu inventario al día de una forma muy sencilla.&nbsp;',
                'image' => 'posts/763655027departamento-de-compras-logistica-05.jpg',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-15 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-15 18:37:02',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Manejo de Precios',
                'description' => 'Caja',
                'contenido' => 'Te ayudamos en el proceso de facturación y el manejo de los costos.',
                'image' => 'posts/224349956CAJERA RESTAURANTE.jpg',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-15 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-15 18:39:27',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Contabilidad',
                'description' => 'Cuentas por pagar',
                'contenido' => 'Maneja tu contabilidad, facturas y cuentas por pagar desde nuestro modulo de contabilidad de&nbsp; Siscop Systems',
                'image' => 'posts/631107506software-de-contabilidad-1-4.jpg',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-15 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-15 19:20:31',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Compras',
                'description' => 'Compras Internacionales',
                'contenido' => 'Diversifica tus proveedores y amplia tus campos.',
                'image' => 'content/posts//4LwYwcYSgxFHNs2ODsYZqnKfHXCJFe9ZJjdZsmEx.png',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-15 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-15 19:48:10',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Interactividad',
                'description' => 'Crea tus productos',
                'contenido' => 'Usa sencillas formulas para crear y desglosar tus productos,&nbsp;',
                'image' => 'content/posts//JHv0XHrCzRHELvGPTz3Iw5yCNgcLHx9bPFch6Zaz.png',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-16 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-16 20:11:43',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Administración',
                'description' => 'Aumenta tus ganancias',
                'contenido' => 'Con nuestro sistema de desglose y manejo de producción puedes ahorrar materiales y aumentar tus ganancias.',
                'image' => 'content/posts//E95CJoZVgT36TUxvcM47nXGY6wJIChpkrZBkZRpO.png',
                'category_id' => 1,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-16 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-16 22:49:54',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Libertad',
                'description' => 'Envía tu cotización desde cualquier lugar.',
                'contenido' => '<p><span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Con nuestro servicio de&nbsp; SISCOP CLOUD puedes conectarte desde cualquier lugar y momento del día, hacer presupuestos y enviar cotizaciones.</span><br></p>',
                'image' => 'content/posts//LzswkdMxMMKWSVOstOhCuQzS75DSNfXzVaB28lSC.png',
                'category_id' => 2,
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-08-28 04:00:00',
                'created_at' => '2019-07-10 10:35:22',
                'updated_at' => '2019-07-16 23:23:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}