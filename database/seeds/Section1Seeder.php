<?php

use Illuminate\Database\Seeder;
use App\ContenidoSection1;

class Section1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data2 = ContenidoSection1::create([
          'logo' => 'content/849295220Logo-Hidalgo.png',
          'title' => 'Grupo Hidalgo & Asociados S.R.L.',
          'tagline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'button' => 'Conoce Nuestros Servicios',
          'background_image' => 'content/271369337bground.jpg',
          'display' => '0'
        ]);
        $data3 = ContenidoSection1::create([
          'logo' => 'content/849295220Logo-Hidalgo.png',
          'title' => 'Grupo Hidalgo & Asociados S.R.L.',
          'tagline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'button' => 'Conoce Nuestros Servicios',
          'background_image' => 'content/271369337bground.jpg',
          'display' => '0'
        ]);
        $data4 = ContenidoSection1::create([
          'logo' => 'content/849295220Logo-Hidalgo.png',
          'title' => 'Grupo Hidalgo & Asociados S.R.L.',
          'tagline' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'button' => 'Conoce Nuestros Servicios',
          'background_image' => 'content/271369337bground.jpg',
          'display' => '0'
        ]);
    }
}
