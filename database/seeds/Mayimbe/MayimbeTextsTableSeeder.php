<?php

use Illuminate\Database\Seeder;

class MayimbeTextsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('texts')->delete();
        
        \DB::table('texts')->insert(array (
            0 => 
            array (
                'id' => '1',
                'text' => '<h2 style="text-align: center; ">LA MEDIDA DE LA EXCELENCIA&nbsp;</h2><p style="text-align: center; "><span style="font-size: large;"><br></span></p><p style="text-align: center; "><span style="font-size: large;">&nbsp;</span><span style="font-size: 1rem;">Caribbean Equipment Medical es la empresa dedicada al sector médico dentro de nuestro grupo, que también se dedica al sector de la construcción y la agricultura, llevando a cabo nuestros proyectos durante los últimos 35 años con éxito en América Latina, el Caribe y los Estados Unidos.</span></p><p style="text-align: center; "><br></p>',
                'back_color' => '#ddebff',
            ),
        ));
        
        
    }
}