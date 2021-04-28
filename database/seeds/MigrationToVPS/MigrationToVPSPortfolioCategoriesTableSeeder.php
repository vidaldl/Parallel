<?php

use Illuminate\Database\Seeder;

class MigrationToVPSPortfolioCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_categories')->delete();
        
        \DB::table('portfolio_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Clientes',
                'created_at' => '2020-05-11 20:52:17',
                'updated_at' => '2020-05-11 20:52:17',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Inventario',
                'created_at' => '2020-05-11 20:52:37',
                'updated_at' => '2020-05-11 20:52:37',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Pedidos',
                'created_at' => '2020-05-11 20:52:47',
                'updated_at' => '2020-05-11 20:52:47',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Facturacion y CxC',
                'created_at' => '2020-05-11 20:52:56',
                'updated_at' => '2020-05-11 20:53:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Produccion',
                'created_at' => '2020-05-11 20:53:23',
                'updated_at' => '2020-05-11 20:53:23',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Compras y CxP',
                'created_at' => '2020-06-03 21:11:36',
                'updated_at' => '2020-06-03 21:11:36',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dolarizar Sistema',
                'created_at' => '2020-06-03 21:32:11',
                'updated_at' => '2020-06-03 21:32:11',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Caja',
                'created_at' => '2020-06-03 21:50:53',
                'updated_at' => '2020-06-03 21:50:53',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Contabilidad',
                'created_at' => '2020-06-04 14:21:46',
                'updated_at' => '2020-06-04 14:21:46',
            ),
        ));
        
        
    }
}