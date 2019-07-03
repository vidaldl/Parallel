<?php

use Illuminate\Database\Seeder;
use App\ContenidoSection1;
use App\ContenidoSection2;
use App\ContenidoSection3;
use App\ContenidoSection4;
use App\ContenidoSection5;
use App\ContenidoSectionFooter;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $section1 = ContenidoSection1::create([
        //   'logo' => 'logo-hidalgo.png',
        //   'title' => 'Grupo Hidalgo & Asociados, S.R.L.',
        //   'tagline' => 'Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.',
        //   'button' => 'Conoce Nuestros Servicios'
        // ]);
        //
        // $section2 = ContenidoSection2::create([
        //   'title' => 'Servicios'
        // ]);

        $section3 = ContenidoSection3::create([
          'title' => 'Acerca de Nosotros',
          'contenido' => 'Lorem ipsum dolor sit amet, nec ad nisl mandamus imperdiet, ut corpora cotidieque cum. Et brute iracundia his, est eu idque dictas gubergren Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulpariatur Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          'button' => 'Más Sobre Nosotros'
        ]);

        // $section4 = ContenidoSection4::create([
        //   'title' => 'Artículos',
        //   'tagline' => 'Mantente al tanto con nosotros!',
        //   'button' => 'Más Articulos <i class="fas fa-chevron-down"></i>'
        // ]);
        //
        // $section5 = ContenidoSection5::create([
        //   'title' => 'Contáctanos',
        //   'address' => 'Calle Republica Dominicana Santo Domingo, Rep Dom 535022',
        //   'email' => 'info@ejemplo.com',
        //   'number' => '+1(809)-123-4567'
        // ]);
        //
        // $sectionFooter = ContenidoSectionFooter::create([
        //   'copy' => 'Grupo Hidalgo',
        //   'facebook_link' => 'https://www.facebook.com/SiscopsystemsSRL',
        //   'instagram_link' => 'https://www.instagram.com/siscopsystems/',
        //   'twitter_link' => 'https://www.twitter.com'
        //
        // ]);
    }
}
