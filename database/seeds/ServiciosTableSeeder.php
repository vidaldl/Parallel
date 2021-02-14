<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('servicios')->delete();
        
        \DB::table('servicios')->insert(array (
            0 => 
            array (
                'id' => '1',
                'icon' => 'clipboard',
                'title' => 'Control de Inventario',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-03 05:28:36',
                'deleted_at' => '2019-07-03 05:28:36',
            ),
            1 => 
            array (
                'id' => '2',
                'icon' => 'hotel',
                'title' => 'Cotizaciones y Presupuestos al Instante',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-03 05:28:00',
                'deleted_at' => '2019-07-03 05:28:00',
            ),
            2 => 
            array (
                'id' => '3',
                'icon' => 'map',
                'title' => 'Compras Internacionales',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-03 05:28:40',
                'deleted_at' => '2019-07-03 05:28:40',
            ),
            3 => 
            array (
                'id' => '4',
                'icon' => 'car',
                'title' => 'Transporte',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-05 00:46:31',
                'deleted_at' => '2019-07-05 00:46:31',
            ),
            4 => 
            array (
                'id' => '5',
                'icon' => 'fas fa-address-book',
                'title' => 'Caja',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-22 07:18:04',
                'deleted_at' => '2019-07-22 07:18:04',
            ),
            5 => 
            array (
                'id' => '6',
                'icon' => 'fas fa-clipboard',
                'title' => 'Logística Aduanera',
                'contenido' => '<p><span style="font-weight: bolder;">Grupo HIDALGO &amp; ASOCIADOS,&nbsp;</span>se ubica en el sector de actividades logísticas y auxiliares relacionadas con el entorno aeroportuario, somos&nbsp;una empresa especializada en importaciones, gestión aduanera, &nbsp; &nbsp; &nbsp; &nbsp;</p><p>En&nbsp;<span style="font-weight: bolder;">Grupo</span>&nbsp;<span style="font-weight: bolder;">HIDALGO &amp; ASOCIADOS</span>&nbsp;nuestra&nbsp;<span style="font-weight: bolder;">MISIÓN</span>&nbsp;es proporcionar grandes ventajas al importador, exportador, en cuanto a la asesoría y agilización de los trámites aduanaros, podemos realizar todo tipo de declaraciones, actuaciones y formalidades en representación de los clientes,&nbsp;ofrecemos un trato personalizado a cada cliente, efectuando un análisis minucioso e individualizado de cada expediente.&nbsp;</p><p>Diseñamos la estrategia más adecuada para garantizar en todo momento los intereses y beneficios de nuestros clientes.&nbsp;</p><p>Nuestro principal&nbsp;<span style="font-weight: bolder;">OBJETIVO</span>&nbsp;se traduce en colaboración y compromiso con nuestros clientes, para garantizar a plena satisfacción de éstos, la consecución de los resultados esperados con nuestro trabajo. Este objetivo se articula sobre la base de: vocación de servicio al cliente,&nbsp; unos servicios profesionales de calidad,&nbsp; precio acorde con el resultado obtenido y con la calidad de los servicios prestados.&nbsp;</p><p>Representamos empresas internacionales, en el ámbito de la logística de transporte las cuales realizan transporte aéreo, marítimo, por carretera,&nbsp; intermodal y &nbsp;grupajes, importaciones, exportaciones, con lo que debido a esta amplia red podemos ofrecer nuestros servicios en cualquier lugar del mundo.</p><p>Con nosotros tu logística funcionará como&nbsp;<span style="font-weight: bolder;">un engranaje perfecto.</span><br>&nbsp;</p>',
                'created_at' => '2019-07-03 05:27:24',
                'updated_at' => '2019-12-10 01:07:23',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => '7',
                'icon' => 'fas fa-building',
                'title' => 'Hotelera',
                'contenido' => '<p><strong>En Grupo HIDALGO &amp; ASOCIADOS,&nbsp;</strong> estamos especializados en gestión aduanera para el sector turístico, poseemos &nbsp;una amplia experiencia &nbsp;en materia hotelera, manejo de Exoneraciones bajo la&nbsp; &nbsp;Ley 158-01 de fomento y desarrollo al sector,&nbsp;Confotur, Almacenaje de Mercancía, Transporte Marítimo, Aéreo y terrestre.&nbsp; &nbsp; &nbsp;</p><p>Para <strong>Grupo</strong> <strong>HIDALGO &amp; ASOCIADOS</strong>, cada proyecto representa un reto, adaptándonos a cada entorno. Nos planteamos la actuación en el sector de la logística e implantación de empresas del sector turístico a través de una esmerada planificación de cada actuación, para adelantarnos a los acontecimientos y evitar contrariedades, Contamos con especialistas, que llevarán a cabo cada proyecto de acuerdo al producto, acumulando&nbsp; los medios necesarios para llevar a cabo el objetivo, cubriendo por completo las expectativas establecidas.</p>',
                'created_at' => '2019-07-03 05:27:24',
                'updated_at' => '2019-12-10 00:55:22',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => '8',
                'icon' => 'fas fa-ship',
                'title' => 'Forwarders',
                'contenido' => '<p> Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>',
                'created_at' => '2019-07-03 05:27:24',
                'updated_at' => '2019-12-10 00:55:29',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => '9',
                'icon' => 'fas fa-warehouse',
                'title' => 'Almacenaje',
                'contenido' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
                'created_at' => '2019-07-03 05:27:24',
                'updated_at' => '2019-07-22 07:17:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => '10',
                'icon' => 'fas fa-truck-loading',
                'title' => 'Transporte',
                'contenido' => '<p>A la hora de responder ante nuestros clientes tenemos todo en cuenta; la elección del vuelo más adecuado, de acuerdo al servicio requerido, las características del envío y la búsqueda de alternativas eficaces y resolutivas. Pero nuestro punto fuerte es el seguimiento detallado de la mercancía, que supone un total control desde el origen hasta el destino mediante nuestras distintas filiales. Puede elegir servicios de carga estándar o garantizados, entre aeropuertos o "Door to Door". Recuerde que somos nosotros los que nos adaptamos a sus necesidades.<br><br><strong>Nuestros servicios vía Aérea:</strong></p><ul><li>Servicio de grupaje</li><li>Door to Door Services</li><li>Mercancía Peligrosas, perecederos y mercancía valiosa.</li><li>Seguros de mercancías</li><li>Despacho de Aduanas</li><li>Servicios especiales</li><li>Import /export</li><li>Cobertura Mundial</li><li>Track &amp; Trace<br></li></ul>',
                'created_at' => '2019-07-03 05:27:24',
                'updated_at' => '2019-12-10 00:55:38',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}