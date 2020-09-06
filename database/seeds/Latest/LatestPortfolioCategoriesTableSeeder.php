<?php

use Illuminate\Database\Seeder;

class LatestPortfolioCategoriesTableSeeder extends Seeder
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
                'id' => '1',
                'name' => 'Gestiones Operacionales y Finanzas',
                'created_at' => NULL,
                'updated_at' => '2020-01-03 07:32:32',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Activos y Mantenimiento',
                'created_at' => NULL,
                'updated_at' => '2020-01-03 07:31:31',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Nómina y Personal',
                'created_at' => NULL,
                'updated_at' => '2020-01-03 07:31:43',
            ),
            3 => 
            array (
                'id' => '5',
                'name' => 'Manejo de Granjas',
                'created_at' => '2019-12-30 18:20:51',
                'updated_at' => '2020-01-03 07:31:57',
            ),
            4 => 
            array (
                'id' => '6',
                'name' => 'Contabilidad',
                'created_at' => '2020-01-03 07:32:43',
                'updated_at' => '2020-01-03 07:32:43',
            ),
            5 => 
            array (
                'id' => '7',
                'name' => 'Carpinteria Aliminio',
                'created_at' => '2020-01-03 17:52:00',
                'updated_at' => '2020-01-03 17:52:00',
            ),
        ));
        
        
    }
}