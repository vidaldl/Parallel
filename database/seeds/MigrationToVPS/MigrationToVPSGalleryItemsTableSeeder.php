<?php

use Illuminate\Database\Seeder;

class MigrationToVPSGalleryItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_items')->delete();
        
        \DB::table('gallery_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Creación de clientes',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Como crear usuarios en el sistema?',
                'video' => 'https://www.youtube.com/watch?v=NzcHiYDaF38',
                'desc' => NULL,
                'left_btn' => 'Ver',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pedidos y Facturación',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Pedidos y Facturación',
                'video' => 'https://www.youtube.com/watch?v=N3sFxhKf4Bc',
                'desc' => NULL,
                'left_btn' => 'Ver',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Creación de Clientes y Listado de Precios',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Creación de Clientes y Listado de Precios',
                'video' => 'https://www.youtube.com/watch?v=LBJacuA9B3g',
                'desc' => NULL,
                'left_btn' => 'Ver',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Inventario',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Inventario',
                'video' => 'https://www.youtube.com/watch?v=q1WcAQgw7_8',
                'desc' => NULL,
                'left_btn' => 'Ver',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Compras y Cuentas por Pagar',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Compras y Cuentas por Pagar',
                'video' => 'https://www.youtube.com/watch?v=-4TDQ0PLcfw',
                'desc' => NULL,
                'left_btn' => 'Ver',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Contabilidad',
                'subtitle' => 'Videos Manuales del Sistema',
                'desc_title' => 'Contabilidad',
                'video' => 'https://www.youtube.com/watch?v=gjwPWggfJ5s',
                'desc' => NULL,
                'left_btn' => 'Expander',
                'right_btn' => 'Más',
                'display_tooltip' => 1,
                'display_type' => 1,
                'display_simple' => 1,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}