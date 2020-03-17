<?php

use Illuminate\Database\Seeder;

class DemoContentModalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('modals')->delete();

        \DB::table('modals')->insert(array (
            0 =>
            array (
                'id' => 1,
                'contenido' => 'Modal de Prueba',
            ),
        ));


    }
}
