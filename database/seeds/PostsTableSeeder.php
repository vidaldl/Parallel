<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
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
                'id' => '2',
                'title' => 'Titulo del Articulo2',
                'description' => '',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image' => 'content/posts//CYpuxwVTz2JWOxVCOytGXBDhemRww21BkLnxLn9J.png',
                'category_id' => '2',
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-30 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '3',
                'title' => 'Titulo del Articulo3',
                'description' => '',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image' => 'content/posts//nU96U4YANuu4EKdlFEPjhFaFhCHzLdUVnirR04dV.png',
                'category_id' => '2',
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-30 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => '4',
                'title' => 'Titulo del Articulo4',
                'description' => '',
                'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image' => 'content/posts//vuwB32JsK2Px3b8mjZ8YptjQBWofn4i8t8bfGHTT.png',
                'category_id' => '1',
                'button' => NULL,
                'link' => NULL,
                'published_at' => '2019-07-30 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => '5',
                'title' => 'ADUANAS SUMA 16 MM LOS CIGARRILLOS COMISADOS SOLO EN 2019',
                'description' => NULL,
            'contenido' => '<p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">Santo Domingo.- La Dirección General de Aduanas (DGA) reveló que una parte importante de los contrabandos descubiertos están relacionadas con el crimen organizado, lo que se desprende de investigaciones en curso, que cuentan con la colaboración de organismos internacionales, y que parecen conducir a una red regional, con otros posibles apéndices.</p><p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">Y es que otro contrabando de cigarrillos fue descubierto este jueves por oficiales de la Dirección General de Aduanas (DGA) en el puerto de Haina Oriental, con la participación de otros organismos de seguridad del Estado. Esta vez la cantidad fue de 5 millones 880 mil unidades, con lo que suman 15 MM 985 mil las unidades decomisadas en los primeros seis meses del año.</p>',
                'image' => 'content/posts//VvJ0jk1HgP0uWw7NdvX8qU9FFi7FMhmjJNXLqnAy.png',
                'category_id' => '2',
                'button' => 'Leer Artículo Completo',
                'link' => 'https://www.aduanas.gob.do/noticias/aduanas-suma-16-mm-los-cigarrillos-comisados-solo-en-2019/',
                'published_at' => '2019-08-09 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => '6',
                'title' => 'A MAYO 2019, 51% DE CONTENEDORES SE DESPACHA EN HORARIO EXTENDIDO',
                'description' => NULL,
            'contenido' => '<p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">El director general de Aduanas, Enrique Ramírez Paniagua, institución que preside el Comité Nacional de Facilitación de Comercio (CNFC), inició con su participación el desayuno panel “Trade Trends. Comercio Internacional en Movimiento: Tendencias y Avances en República Dominicana”, organizado por la Cámara Americana de Comercio de la República Dominicana, entidad que ocupa la secretaría del CNFC, órgano compuesto por entes de los sectores público y privado en igualdad de número, que se desprende del Acuerdo de Facilitación de Comercio del que el país es signatario.</p><p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">En su exposición, Ramírez Paniagua rindió un informe de las acciones que ha venido ejecutando el Comité desde su conformación en diciembre de 2017, destacando el impacto positivo del horario extendido en el despacho de contenedores, de 7:00 a. m. a 10:00 p. m., una iniciativa de la Dirección General de Aduanas aplicada a modo de piloto en los puertos Multimodal Caucedo y Haina Oriental el año pasado, medida que se hizo obligatoria al ser establecida como tal mediante decreto presidencial número 384-18.</p>',
                'image' => 'content/posts//lQ5RHHyBV9cxaErBps5IabEfCadm1Pv3xKO3b2qm.png',
                'category_id' => '2',
                'button' => 'Leer Articulo Completo',
                'link' => 'https://www.aduanas.gob.do/noticias/a-mayo-2019-51-de-contenedores-se-despacha-en-horario-extendido/',
                'published_at' => '2019-08-09 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => '7',
                'title' => 'AUTORIDADES DESARTICULAN ESTRUCTURA DELICTIVA DEDICADA A EXPORTAR MEDICAMENTOS FALSIFICADOS',
                'description' => NULL,
            'contenido' => '<p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">Las autoridades dominicanas desarticularon una poderosa organización criminal internacional que se dedicaba a la falsificación, adulteración y exportación de medicamentos para el consumo humano, siete de cuyos miembros de nacionalidad venezolana, fueron capturados mediante allanamientos simultáneos.</p><p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">Las intervenciones fueron realizadas por la Dirección Central de Inteligencia (Dintel), de nuestra Policía Nacional, la Gerencia de Inteligencia de la Dirección General de Aduanas (DGA), la Procuraduría Especializada de Crímenes y Delitos contra La Salud (Pedecsa) y el Ministerio Público Santo Domingo Este.</p>',
                'image' => 'content/posts//Jb4rArAvVXSTwC48Oiyq1UQ8YDcxelazHbBifHJR.png',
                'category_id' => '1',
                'button' => 'Leer Articulo Completo',
                'link' => 'https://www.aduanas.gob.do/noticias/autoridades-desarticulan-estructura-delictiva-dedicada-a-exportar-medicamentos-falsificados/',
                'published_at' => '2019-08-09 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-02 02:44:41',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => '8',
                'title' => 'LABORATORIO DGA LOGRA CERTIFICACIÓN ISO 9001-2015',
                'description' => 'Anúncio Aduanas',
            'contenido' => '<p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">El laboratorio de la Dirección General de Aduanas (DGA) recibió la certificación de la Norma ISO 9001-2015, avalando su sistema de gestión y competencias para análisis químicos, físicos y microbiológicos.</p><p style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;; text-align: justify;">La entrega del certificado que deja constancia del importante logro, se produjo en las instalaciones de esta dependencia de Aduanas, durante un acto encabezado por el director general, Enrique Ramírez Paniagua, y el encargado del laboratorio, Aris Mendis Gómez, quienes recibieron el documento de manos de Anahid Hamparzoumian, representante en la República Dominicana de European Quality Assurance, filial México, entidad emisora, y Luis Rosado, por la firma de auditores KPMG.</p>',
                'image' => 'content/posts//twCPw3ymiFviYITu7JMb196UrZOHDJJU0sqORdMV.png',
                'category_id' => '2',
                'button' => 'Leer Articulo Completo',
                'link' => 'https://www.aduanas.gob.do/noticias/laboratorio-dga-logra-certificaci%C3%B3n-iso-9001-2015/',
                'published_at' => '2019-08-09 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-03 03:03:57',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => '9',
                'title' => 'ADUANAS REFUERZA MEDIDAS DE SEGURIDAD EN ZONAS PRIMARIAS',
                'description' => 'Descripcion',
            'contenido' => '<div class="content-post text-justify" style="color: rgb(102, 102, 102); font-family: &quot;Myriad Pro&quot;;"><p>La Dirección General de Aduanas (DGA) comunicó que continúa implementando acciones puntuales, tanto internas como externas, en lo relativo al ingreso de mercancías que la comunidad dominicana en el exterior, sobre todo desde Estados Unidos, envía al país a través de las consolidadoras de carga o shippings, esto como parte del proceso de ordenamiento, seguridad y facilidades alrededor de esta actividad.<br><br>Entre las medidas, la DGA citó la de circunscribir el acceso a zona primaria aduanera a solo dos representantes por cada agencia de envío, en lugar de los seis y hasta siete que intervenían, medida que se suma a las que aplican las empresas operadoras de los puertos en las áreas restringidas, como se hace en todas partes del mundo.</p></div>',
                'image' => 'content/posts//0ozigIEMgtcXFqs6vIBZjg34kxIiUL17hAm1q3wE.png',
                'category_id' => '3',
                'button' => 'Leer Articulo Completo',
                'link' => 'https://www.aduanas.gob.do/noticias/aduanas-refuerza-medidas-de-seguridad-en-zonas-primarias/',
                'published_at' => '2019-08-09 00:00:00',
                'created_at' => '2019-07-02 02:44:41',
                'updated_at' => '2019-07-03 01:39:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}