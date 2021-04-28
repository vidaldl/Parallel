<?php

use Illuminate\Database\Seeder;

class MigrationToVPSPricingItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pricing_items')->delete();
        
        \DB::table('pricing_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item' => 'MANEJO DE CLIENTES',
            ),
            1 => 
            array (
                'id' => 2,
                'item' => 'COTIZACIONES Y PRESUPUESTOS',
            ),
            2 => 
            array (
                'id' => 3,
                'item' => 'CUENTAS POR COBRAR, INVENTARIO Y CUENTAS POR PAGAR',
            ),
            3 => 
            array (
                'id' => 4,
                'item' => 'CHEQUES, MANEJO DE SUPLIDORES Y CAJA CHICA',
            ),
            4 => 
            array (
                'id' => 5,
                'item' => 'SISTEMA DE REPORTERÍA POR PANTALLA, IMPRESA Y POR EMAIL',
            ),
            5 => 
            array (
                'id' => 6,
                'item' => 'CONTABILIDAD Y REPORTES FISCALES',
            ),
            6 => 
            array (
                'id' => 12,
                'item' => 'MANEJO DE PRESUPUESTOS Y COTIZACIONES',
            ),
            7 => 
            array (
                'id' => 13,
                'item' => 'MANEJODE CLIENTES Y CUENTAS POR COBRAR',
            ),
            8 => 
            array (
                'id' => 14,
                'item' => 'DESGLOSE DE MATERIALES, ACCESORIOS, CONTROL DE INVENTARIO',
            ),
            9 => 
            array (
                'id' => 15,
                'item' => 'SISTEMA DE CONTROL DE PRODUCCIÓN POR TICKETS',
            ),
            10 => 
            array (
                'id' => 16,
                'item' => 'COMPRAS, COSTOS, PAGOS Y LIQUIDACIONES ADUANALES',
            ),
            11 => 
            array (
                'id' => 17,
                'item' => 'COMPRAS, COSTOS, PAGOS Y LIQUIDACIONES ADUANALES',
            ),
            12 => 
            array (
                'id' => 18,
                'item' => 'CONTABILIDAD Y REPORTES FISCALES',
            ),
            13 => 
            array (
                'id' => 19,
                'item' => 'SISTEMA DE PRESUPUESTOS Y CONTROL DE PROYECTOS',
            ),
            14 => 
            array (
                'id' => 20,
                'item' => 'DESGLOSE DE MATERIALES',
            ),
            15 => 
            array (
                'id' => 21,
                'item' => 'ANALISIS DE COSTOS DE PROYECTOS',
            ),
            16 => 
            array (
                'id' => 22,
                'item' => 'ANÁLISIS DE USO DE MATERIALES',
            ),
            17 => 
            array (
                'id' => 23,
                'item' => 'CONTROLES DE INVENTARIOS',
            ),
            18 => 
            array (
                'id' => 24,
                'item' => 'FACTURACIÓN, CUENTAS X COBRAR Y CONTROL DE CLIENTES',
            ),
        ));
        
        
    }
}