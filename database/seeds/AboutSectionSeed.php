<?php

use Illuminate\Database\Seeder;
use App\ContenidoAbout;

class AboutSectionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contenido = ContenidoAbout::create([
          'mision' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
          'vision' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
          'valores' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
          'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945.9917480715749!2d-69.84341717077135!3d18.48515427112602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf87c5cc240faf%3A0x13379fb40a8433dc!2sGrupo+Hidalgo+%26+Asociados%2C+SRL.!5e0!3m2!1ses-419!2sdo!4v1562016688708!5m2!1ses-419!2sdo" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>'
        ]);
    }
}
