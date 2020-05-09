<?php

use Illuminate\Database\Seeder;

class DemoContentContenidoSection5sTableSeeder extends Seeder
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
            ),
        ));


    }
}
